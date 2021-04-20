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
	WorldID	 				CHAR(15) NOT NULL,
	WorldName				CHAR(64) NOT NULL DEFAULT 'New World',
	MaxPlots				INTEGER NOT NULL DEFAULT 100,
	MaxPlayerCapacity		INTEGER NOT NULL DEFAULT 25,
	InitialPlotPrices		INTEGER NOT NULL DEFAULT 100,
    PvP						BOOL NOT NULL DEFAULT FALSE,
    INDEX world_id(WorldID),
    PRIMARY KEY (WorldID)
);

CREATE TABLE QUEST
(
	QuestID 				CHAR(15) NOT NULL,
	QuestName				CHAR(30) NOT NULL,
	QuestDescription		TEXT NOT NULL,
	CoinsGain				INTEGER NOT NULL DEFAULT 0,
	ExperienceGain			INTEGER NOT NULL DEFAULT 0,
    AttackGain				INTEGER NOT NULL DEFAULT 0,
	DefenceGain				INTEGER NOT NULL DEFAULT 0,
	HealthGain				INTEGER NOT NULL DEFAULT 0,
	TimeLimit				TIME DEFAULT "01:00:00.0000000",
	MinLevel				INTEGER DEFAULT 1,
    INDEX quest_id (QuestID),
    PRIMARY KEY (QuestID)
);

CREATE TABLE GUILD
(
	GuildID 				CHAR(15) NOT NULL,
	GuildName				CHAR(30) NOT NULL UNIQUE,
	MaxNumMembers			INTEGER DEFAULT 10,
    GuildExperience			INTEGER NOT NULL DEFAULT 0,
	GuildLevel				INTEGER NOT NULL DEFAULT 0,
    INDEX guild_id (GuildID),
    PRIMARY KEY (GuildID)
);

CREATE TABLE PLAYER
(
	PlayerID 				CHAR(15) NOT NULL,
	PlayerName				CHAR(15) NOT NULL,
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
	Guild					CHAR(15),
    FOREIGN KEY (Guild) REFERENCES GUILD(GuildID) ON DELETE SET NULL,
	GuildPosition			CHAR(6) CHECK(GuildPosition IN('Leader', 'Elder', 'Member', NULL)),
	World					CHAR(15) NOT NULL,
    FOREIGN KEY (World) REFERENCES WORLD(WorldID) ON DELETE CASCADE,
	Wood					INTEGER DEFAULT 0,
	Fish					INTEGER DEFAULT 0,
	Food					INTEGER DEFAULT 0,
	Diamonds				INTEGER DEFAULT 0,
    INDEX player_ID (PlayerID),
    PRIMARY KEY (PlayerID)
);

/*Creating mission table to define the many to many relationship between players and quests*/
CREATE TABLE MISSION
(
	PlayerID 				CHAR(15) NOT NULL,
    QuestID 				CHAR(15) NOT NULL,
    DateStart				DATE NOT NULL,
    FOREIGN KEY (PlayerID) REFERENCES PLAYER(PlayerID) ON DELETE CASCADE,
    FOREIGN KEY (QuestID) REFERENCES QUEST(QuestID) ON DELETE CASCADE,
    INDEX player_id (PlayerID),
    KEY (PlayerID, QuestID)
);

CREATE TABLE PLOT
(
	PlotID 					CHAR(15) NOT NULL,
	World					CHAR(15) NOT NULL,
    FOREIGN KEY (World) REFERENCES WORLD(WorldID) ON DELETE CASCADE,
	Owner					CHAR(15) NOT NULL,
    FOREIGN KEY (Owner) REFERENCES PLAYER(PlayerID) ON DELETE CASCADE,
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