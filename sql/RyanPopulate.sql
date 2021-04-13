-- populate test data script --


-- populate Account x5--
INSERT INTO ACCOUNT(Email, Username, Password, Role, DateSignedUp, LeaderboardRanking, Balance, MoneySpent, IsBanned)
VALUES ('ryandriscoll0@gmail.com', 'rcdriscoll', 'targyiscool', 'Admin', '2020-01-01', NULL, 0.00, 0.00, FALSE);

INSERT INTO ACCOUNT(Email, Username, Password, Role, DateSignedUp, LeaderboardRanking, Balance, MoneySpent, IsBanned)
VALUES ('bilbo@gmail.com', 'BilboBaginz', 'hobbit', 'User', '2020-01-01', NULL, 0.00, 0.00, FALSE);

INSERT INTO ACCOUNT(Email, Username, Password, Role, DateSignedUp, LeaderboardRanking, Balance, MoneySpent, IsBanned)
VALUES ('yods@gmail.com', 'Yoda', 'force',  'User', '2020-01-01', NULL, 0.00, 0.00, FALSE);

INSERT INTO ACCOUNT(Email, Username, Password, Role, DateSignedUp, LeaderboardRanking, Balance, MoneySpent, IsBanned)
VALUES ('gnome@gmail.com', 'GnomeButcher', 'gnome',  'User', '2021-03-10', NULL, 0.00, 0.00, FALSE);

INSERT INTO ACCOUNT(Email, Username, Password, Role, DateSignedUp, LeaderboardRanking, Balance, MoneySpent, IsBanned)
VALUES ('undertaker@gmail.com', 'TheUndertaker', 'undertaker',  'User', '2021-03-01', NULL, 0.00, 0.00, FALSE);



-- populate World x5--
INSERT INTO WORLD(WorldID, WorldName, MaxPlots, MaxPlayerCapacity, WorldType, InitialPlotPrices, PvP)
VALUES ('RDW001', 'Ryans World', 20, 5, 'Private', 100, FALSE);

INSERT INTO WORLD(WorldID, WorldName, MaxPlots, MaxPlayerCapacity, WorldType, InitialPlotPrices, PvP)
VALUES ('RDW002', 'Crazy World', 100, 10, 'Public', 100, TRUE);

INSERT INTO WORLD(WorldID, WorldName, MaxPlots, MaxPlayerCapacity, WorldType, InitialPlotPrices, PvP)
VALUES ('RDW003', 'Lil World', 500, 10, 'Private', 100, FALSE);

INSERT INTO WORLD(WorldID, WorldName, MaxPlots, MaxPlayerCapacity, WorldType, InitialPlotPrices, PvP)
VALUES ('RDW004', 'Mega World', 500, 50, 'Public', 100, FALSE);

INSERT INTO WORLD(WorldID, WorldName, MaxPlots, MaxPlayerCapacity, WorldType, InitialPlotPrices, PvP)
VALUES ('RDW005', 'Ryanopolis', 1000, 100, 'Private', 1000, FALSE);





-- populate guilds x2 --
INSERT INTO GUILD(GuildID, GuildName, MaxNumMembers, GuildExperience, GuildLevel)
VALUES ('RDG001', 'Awesome Guild', 20, 40, 5);

INSERT INTO GUILD
VALUES ('RDG002', 'ragers', 5, 500, 10);






-- populate players x10 --
-- playerId, name, accountId, last logged in, xp, coins, attack, defence, health, level, title rank, guild, guild pos, world, wood, fish, food, diamonds --
INSERT INTO PLAYER(PlayerID, PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds) 
VALUES('RDP001', 'myPlayer', 'bilbo@gmail.com', '2021-04-08', 500, 400, 200, 30, 50, 5, 'Donor', 'RDG001', 'Member', 'RDW001', 200, 200, 200, 200);

INSERT INTO PLAYER(PlayerID, PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds)
VALUES('RDP002', 'gorbat', 'yods@gmail.com', '2021-04-07', 500, 300, 10, 40, 50, 15, 'Donor', 'RDG001', 'Leader', 'RDW001', 100, 140, 134, 129);

INSERT INTO PLAYER(PlayerID, PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds)
VALUES('RDP003', 'hollier', 'gnome@gmail.com', '2021-04-06', 760, 120, 13, 15, 75, 11, NULL, 'RDG002', 'Leader', 'RDW002', 130, 500, 200, 300);

INSERT INTO PLAYER(PlayerID, PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds)
VALUES('RDP004', 'iAmLegend', 'undertaker@gmail.com', '2021-04-06', 500, 100, 11, 11, 40, 8, NULL, 'RDG002', 'Member', 'RDW002', 100, 100, 100, 100);

INSERT INTO PLAYER(PlayerID, PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds)
VALUES('RDP005', 'second player', 'undertaker@gmail.com', '2021-04-01', 200, 50, 5, 5, 15, 5, NULL, NULL, NULL, 'RDW002', 130, 500, 200, 300);

INSERT INTO PLAYER(PlayerID, PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds)
VALUES('RDP006', 'chewbot', 'bilbo@gmail.com', '2021-04-06', 250, 40, 3, 3, 15, 4, NULL, NULL, NULL, 'RDW003', 50, 50, 50, 50);

INSERT INTO PLAYER(PlayerID, PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds)
VALUES('RDP007', 'joker', 'gnome@gmail.com', '2021-03-16', 300, 100, 10, 10, 40, 8, NULL, NULL, NULL, 'RDW004', 100, 100, 100, 100);

INSERT INTO PLAYER(PlayerID, PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds)
VALUES('RDP008', 'battman', 'yods@gmail.com', '2021-03-01', 1000, 945, 15, 15, 50, 12, NULL, NULL, NULL, 'RDW003', 100, 100, 100, 100);

INSERT INTO PLAYER(PlayerID, PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds)
VALUES('RDP009', 'robinbird', 'yods@gmail.com', '2021-03-28', 800, 400, 10, 10, 40, 10, NULL, NULL, NULL, 'RDW004', 100, 100, 100, 100);

INSERT INTO PLAYER(PlayerID, PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds)
VALUES('RDP010', 'newGuy', 'bilbo@gmail.com', '2021-03-31', 0, 0, 1, 1, 10, 1, NULL, NULL, NULL, 'RDW005', 0, 0, 0, 0);






-- populate quests x10 --
INSERT INTO QUEST(QuestID, QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel)
VALUES('RDQ001', 'Cut Wood', 'Collect 10 cords of wood', 0, 50, 0, 0, 0, '00:00:10.000000', 1);

INSERT INTO QUEST(QuestID, QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel)
VALUES('RDQ002', 'Steal Gold', 'Be quiet and sneaky in the night', 500, 25, 0, 0, 0, '00:010:00.000000', 10);

INSERT INTO QUEST(QuestID, QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel)
VALUES('RDQ003', 'Kill Spiders', 'Kill the spiders before they kill you!', 0, 300, 10, 5, 10, '00:001:00.000000', 5);

INSERT INTO QUEST(QuestID, QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel)
VALUES('RDQ004', 'Noob Quest', 'Noobs start here', 1, 1, 1, 1, 1, '00:000:01.000000', 1);

INSERT INTO QUEST(QuestID, QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel)
VALUES('RDQ005', 'Target Practice', 'Shoot your bow at a straw target', 0, 50, 10, 0, 0, '00:001:00.000000', 5);

INSERT INTO QUEST(QuestID, QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel)
VALUES('RDQ006', 'Sword Practice', 'Swing your sword at a straw target', 0, 300, 10, 0, 0, '00:001:00.000000', 5);

INSERT INTO QUEST(QuestID, QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel)
VALUES('RDQ007', 'Till the Land', 'Prepare your land for farming', 0, 500, 0, 0, 10, '00:010:00.000000', 10);


INSERT INTO QUEST(QuestID, QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel)
VALUES('RDQ008', 'Start A Fire', 'Start a fire in the cold to keep warm', 0, 10, 0, 0, 0, '00:000:10.000000', 1);

INSERT INTO QUEST(QuestID, QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel)
VALUES('RDQ009', 'Hunt small game', 'Hunt a rabbit in the woods', 5, 100, 5, 1, 1, '00:001:00.000000', 5);

INSERT INTO QUEST(QuestID, QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel)
VALUES('RDQ010', 'Hunt big game', 'Hunt a deer in the woods', 10, 200, 10, 2, 2, '00:002:00.000000', 10);





-- populate plots x10 --
INSERT INTO PLOT(PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType)
VALUES ('RD001', 'RDW001', 'RDP001', 100, 30, 10, 10, 10, 100, 100, 100, 100, 'Resident');

INSERT INTO PLOT(PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType)
VALUES ('RD002', 'RDW001', 'RDP002', 90, 20, 5, 5, 5, 10, 10, 10, 10, 'Resident');

INSERT INTO PLOT(PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType)
VALUES ('RD003', 'RDW002', 'RDP003', 100, 30, 10, 10, 10, 100, 100, 100, 100, 'Resident');

INSERT INTO PLOT(PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType)
VALUES ('RD004', 'RDW002', 'RDP004', 50, 10, 10, 10, 10, 10, 10, 10, 10, 'Ally');

INSERT INTO PLOT(PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType)
VALUES ('RD005', 'RDW003', 'RDP002', 50, 10, 10, 10, 10, 10, 10, 10, 10, 'Outsider');

INSERT INTO PLOT(PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType)
VALUES ('RD006', 'RDW004', 'RDP006', 40, 8, 8, 8, 8, 30, 30, 30, 30, 'Outsider');

INSERT INTO PLOT(PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType)
VALUES ('RD007', 'RDW004', 'RDP007', 140, 18, 28, 34, 80, 30, 30, 30, 30, 'Resident');

INSERT INTO PLOT(PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType)
VALUES ('RD008', 'RDW004', 'RDP008', 20, 10, 10, 10, 10, 0, 0, 0, 0, 'Resident');

INSERT INTO PLOT(PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType)
VALUES ('RD009', 'RDW005', 'RDP009', 20, 10, 10, 10, 10, 0, 0, 0, 0, 'Resident');

INSERT INTO PLOT(PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType)
VALUES ('RD010', 'RDW005', 'RDP010', 40, 10, 10, 10, 10, 100, 100, 100, 100, 'Resident');
