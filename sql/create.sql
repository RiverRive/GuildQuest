DROP DATABASE IF EXISTS GuildQuest;
CREATE DATABASE GuildQuest;
USE GuildQuest;

CREATE TABLE ACCOUNT
(   
	Email					CHAR(64) NOT NULL UNIQUE,
	Username				CHAR(15) NOT NULL UNIQUE,
	Password				CHAR(20) NOT NULL,
	Role					CHAR(5) CHECK(Role IN('Admin', 'Mod', 'User')) DEFAULT 'User',
	DateSignedUp			DATE NOT NULL,
	Balance					DECIMAL(7,2) DEFAULT 0.00, 
	MoneySpent				DECIMAL(7,2) DEFAULT 0.00,
	IsBanned				BOOL NOT NULL DEFAULT FALSE,
    INDEX account_email (Email),
    PRIMARY KEY (Email)
);

CREATE TABLE WORLD
(
	WorldName				CHAR(64) NOT NULL UNIQUE,
	MaxPlots				INTEGER NOT NULL DEFAULT 100,
	MaxPlayerCapacity		INTEGER NOT NULL DEFAULT 25,
	InitialPlotPrices		INTEGER NOT NULL DEFAULT 100,
    PvP						BOOL NOT NULL DEFAULT FALSE,
    INDEX world_name (WorldName),
    PRIMARY KEY (WorldName)
);

CREATE TABLE QUEST
(
	QuestName				CHAR(30) NOT NULL UNIQUE,
	QuestDescription		TEXT NOT NULL,
	CoinsGain				INTEGER NOT NULL DEFAULT 0,
	ExperienceGain			INTEGER NOT NULL DEFAULT 0,
    AttackGain				INTEGER NOT NULL DEFAULT 0,
	DefenceGain				INTEGER NOT NULL DEFAULT 0,
	HealthGain				INTEGER NOT NULL DEFAULT 0,
	TimeLimit				TIME DEFAULT "01:00:00.0000000",
	MinLevel				INTEGER DEFAULT 1,
    INDEX quest_name (QuestName),
    PRIMARY KEY (QuestName)
);

CREATE TABLE GUILD
(
	GuildName				CHAR(30) NOT NULL UNIQUE,
	MaxNumMembers			INTEGER DEFAULT 10,
    GuildExperience			INTEGER NOT NULL DEFAULT 0,
	GuildLevel				INTEGER NOT NULL DEFAULT 0,
    INDEX guild_name (GuildName),
    PRIMARY KEY (GuildName)
);

CREATE TABLE PLAYER
(
	PlayerName				CHAR(15) NOT NULL UNIQUE,
	Account					CHAR(64),
	FOREIGN KEY (Account) REFERENCES ACCOUNT(Email) ON DELETE SET NULL,
	DateLastLogged			DATE NOT NULL,
	Experience				INTEGER DEFAULT 0,
	Coins					INTEGER DEFAULT 0,
	Attack					INTEGER DEFAULT 0,
	Defence					INTEGER DEFAULT 0,
	Health					INTEGER DEFAULT 0,
	Level					INTEGER DEFAULT 0,
	TitleRank				CHAR(10) CHECK(TitleRank IN('Player','Donor', 'SuperDonor')) DEFAULT 'Player',
	Guild					CHAR(30),
    FOREIGN KEY (Guild) REFERENCES GUILD(GuildName) ON DELETE SET NULL,
	GuildPosition			CHAR(6) CHECK(GuildPosition IN('Leader', 'Elder', 'Member')) DEFAULT 'Member',
	World					CHAR(64) NOT NULL,
    FOREIGN KEY (World) REFERENCES WORLD(WorldName) ON DELETE CASCADE,
	Wood					INTEGER DEFAULT 0,
	Fish					INTEGER DEFAULT 0,
	Food					INTEGER DEFAULT 0,
	Diamonds				INTEGER DEFAULT 0,
    INDEX player_name (PlayerName),
    PRIMARY KEY (PlayerName)
);

/*Creating mission table to define the many to many relationship between players and quests*/
CREATE TABLE MISSION
(
	PlayerName 				CHAR(15) NOT NULL,
    QuestName 				CHAR(30) NOT NULL,
    DateStart				DATE NOT NULL,
    FOREIGN KEY (PlayerName) REFERENCES PLAYER(PlayerName) ON DELETE CASCADE,
    FOREIGN KEY (QuestName) REFERENCES QUEST(QuestName) ON DELETE CASCADE,
    INDEX player_name (PlayerName),
    PRIMARY KEY (PlayerName, QuestName)
);

CREATE TABLE PLOT
(
	PlotID 					CHAR(15) NOT NULL,
	World					CHAR(64) NOT NULL,
    FOREIGN KEY (World) REFERENCES WORLD(WorldName) ON DELETE CASCADE,
	Owner					CHAR(15) NOT NULL,
    FOREIGN KEY (Owner) REFERENCES PLAYER(PlayerName) ON DELETE CASCADE,
	DailyUpkeep				INTEGER NOT NULL DEFAULT 0,
    DailyWood				INTEGER NOT NULL DEFAULT 1,
    DailyFish				INTEGER NOT NULL DEFAULT 1,
    DailyFood				INTEGER NOT NULL DEFAULT 1,
    DailyDiamond			INTEGER NOT NULL DEFAULT 1,
    WoodInventory			INTEGER NOT NULL DEFAULT 0,
	FishInventory			INTEGER NOT NULL DEFAULT 0,
	FoodInventory			INTEGER NOT NULL DEFAULT 0,
	DiamondInventory		INTEGER NOT NULL DEFAULT 0,
	PermissionType 			CHAR(8) CHECK(PermissionType IN('Resident', 'Ally', 'Outsider')) DEFAULT 'Resident',
    INDEX plot_id (PlotID),
    PRIMARY KEY (PlotID)
);

COMMIT;