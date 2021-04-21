-- populate test data script --


-- populate Account x5--
INSERT INTO ACCOUNT(Email, Username, Password, Role, DateSignedUp, Balance, MoneySpent, IsBanned)
VALUES ('ryandriscoll0@gmail.com', 'rcdriscoll', 'targyiscool', 'Admin', '2020-01-01', 0.00, 0.00, FALSE);

INSERT INTO ACCOUNT(Email, Username, Password, Role, DateSignedUp, Balance, MoneySpent, IsBanned)
VALUES ('bilbo@gmail.com', 'BilboBaginz', 'hobbit', 'User', '2020-01-01', 0.00, 0.00, FALSE);

INSERT INTO ACCOUNT(Email, Username, Password, Role, DateSignedUp, Balance, MoneySpent, IsBanned)
VALUES ('yods@gmail.com', 'Yoda', 'force',  'User', '2020-01-01', 0.00, 0.00, FALSE);

INSERT INTO ACCOUNT(Email, Username, Password, Role, DateSignedUp, Balance, MoneySpent, IsBanned)
VALUES ('gnome@gmail.com', 'GnomeButcher', 'gnome',  'User', '2021-03-10', 0.00, 0.00, FALSE);

INSERT INTO ACCOUNT(Email, Username, Password, Role, DateSignedUp, Balance, MoneySpent, IsBanned)
VALUES ('undertaker@gmail.com', 'TheUndertaker', 'undertaker',  'User', '2021-03-01', 0.00, 0.00, FALSE);



-- populate World x5--
INSERT INTO WORLD(WorldName, MaxPlots, MaxPlayerCapacity, InitialPlotPrices, PvP)
VALUES ('Ryans World', 20, 5, 100, FALSE);

INSERT INTO WORLD(WorldName, MaxPlots, MaxPlayerCapacity, InitialPlotPrices, PvP)
VALUES ('Crazy World', 100, 10, 100, TRUE);

INSERT INTO WORLD(WorldName, MaxPlots, MaxPlayerCapacity, InitialPlotPrices, PvP)
VALUES ('Lil World', 500, 10, 100, FALSE);

INSERT INTO WORLD(WorldName, MaxPlots, MaxPlayerCapacity, InitialPlotPrices, PvP)
VALUES ('Mega World', 500, 50, 100, FALSE);

INSERT INTO WORLD(WorldName, MaxPlots, MaxPlayerCapacity, InitialPlotPrices, PvP)
VALUES ('Ryanopolis', 1000, 100, 1000, FALSE);





-- populate guilds x2 --
INSERT INTO GUILD(GuildName, MaxNumMembers, GuildExperience, GuildLevel)
VALUES ('Awesome Guild', 20, 40, 5);

INSERT INTO GUILD
VALUES ('ragers', 5, 500, 10);






-- populate players x10 --
-- playerId, name, accountId, last logged in, xp, coins, attack, defence, health, level, title rank, guild, guild pos, world, wood, fish, food, diamonds --
INSERT INTO PLAYER(PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds) 
VALUES('myPlayer', 'bilbo@gmail.com', '2021-04-08', 500, 400, 200, 30, 50, 5, 'Donor', 'Awesome Guild', 'Member', 'Ryans World', 200, 200, 200, 200);

INSERT INTO PLAYER(PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds)
VALUES('gorbat', 'yods@gmail.com', '2021-04-07', 500, 300, 10, 40, 50, 15, 'Donor', 'Awesome Guild', 'Leader', 'Ryans World', 100, 140, 134, 129);

INSERT INTO PLAYER(PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds)
VALUES('hollier', 'gnome@gmail.com', '2021-04-06', 760, 120, 13, 15, 75, 11, NULL, 'ragers', 'Leader', 'Crazy World', 130, 500, 200, 300);

INSERT INTO PLAYER(PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds)
VALUES('iAmLegend', 'undertaker@gmail.com', '2021-04-06', 500, 100, 11, 11, 40, 8, NULL, 'ragers', 'Member', 'Crazy World', 100, 100, 100, 100);

INSERT INTO PLAYER(PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds)
VALUES('second player', 'undertaker@gmail.com', '2021-04-01', 200, 50, 5, 5, 15, 5, NULL, NULL, NULL, 'Crazy World', 130, 500, 200, 300);

INSERT INTO PLAYER(PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds)
VALUES('chewbot', 'bilbo@gmail.com', '2021-04-06', 250, 40, 3, 3, 15, 4, NULL, NULL, NULL, 'Lil World', 50, 50, 50, 50);

INSERT INTO PLAYER(PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds)
VALUES('joker', 'gnome@gmail.com', '2021-03-16', 300, 100, 10, 10, 40, 8, NULL, NULL, NULL, 'Mega World', 100, 100, 100, 100);

INSERT INTO PLAYER(PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds)
VALUES('battman', 'yods@gmail.com', '2021-03-01', 1000, 945, 15, 15, 50, 12, NULL, NULL, NULL, 'Lil World', 100, 100, 100, 100);

INSERT INTO PLAYER(PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds)
VALUES('robinbird', 'yods@gmail.com', '2021-03-28', 800, 400, 10, 10, 40, 10, NULL, NULL, NULL, 'Mega World', 100, 100, 100, 100);

INSERT INTO PLAYER(PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds)
VALUES('newGuy', 'bilbo@gmail.com', '2021-03-31', 0, 0, 1, 1, 10, 1, NULL, NULL, NULL, 'Ryanopolis', 0, 0, 0, 0);






-- populate quests x10 --
INSERT INTO QUEST(QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel)
VALUES('Cut Wood', 'Collect 10 cords of wood', 0, 50, 0, 0, 0, '00:00:10.000000', 1);

INSERT INTO QUEST(QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel)
VALUES('Steal Gold', 'Be quiet and sneaky in the night', 500, 25, 0, 0, 0, '00:010:00.000000', 10);

INSERT INTO QUEST(QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel)
VALUES('Kill Spiders', 'Kill the spiders before they kill you!', 0, 300, 10, 5, 10, '00:001:00.000000', 5);

INSERT INTO QUEST(QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel)
VALUES('Noob Quest', 'Noobs start here', 1, 1, 1, 1, 1, '00:000:01.000000', 1);

INSERT INTO QUEST(QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel)
VALUES('Target Practice', 'Shoot your bow at a straw target', 0, 50, 10, 0, 0, '00:001:00.000000', 5);

INSERT INTO QUEST(QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel)
VALUES('Sword Practice', 'Swing your sword at a straw target', 0, 300, 10, 0, 0, '00:001:00.000000', 5);

INSERT INTO QUEST(QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel)
VALUES('Till the Land', 'Prepare your land for farming', 0, 500, 0, 0, 10, '00:010:00.000000', 10);

INSERT INTO QUEST(QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel)
VALUES('Start A Fire', 'Start a fire in the cold to keep warm', 0, 10, 0, 0, 0, '00:000:10.000000', 1);

INSERT INTO QUEST(QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel)
VALUES('Hunt small game', 'Hunt a rabbit in the woods', 5, 100, 5, 1, 1, '00:001:00.000000', 5);

INSERT INTO QUEST(QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel)
VALUES('Hunt big game', 'Hunt a deer in the woods', 10, 200, 10, 2, 2, '00:002:00.000000', 10);





-- populate plots x10 --
INSERT INTO PLOT(PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType)
VALUES ('RD001', 'Ryans World', 'myPlayer', 100, 30, 10, 10, 10, 100, 100, 100, 100, 'Resident');

INSERT INTO PLOT(PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType)
VALUES ('RD002', 'Ryans World', 'gorbat', 90, 20, 5, 5, 5, 10, 10, 10, 10, 'Resident');

INSERT INTO PLOT(PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType)
VALUES ('RD003', 'Crazy World', 'hollier', 100, 30, 10, 10, 10, 100, 100, 100, 100, 'Resident');

INSERT INTO PLOT(PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType)
VALUES ('RD004', 'Crazy World', 'iAmLegend', 50, 10, 10, 10, 10, 10, 10, 10, 10, 'Ally');

INSERT INTO PLOT(PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType)
VALUES ('RD005', 'Lil World', 'gorbat', 50, 10, 10, 10, 10, 10, 10, 10, 10, 'Outsider');

INSERT INTO PLOT(PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType)
VALUES ('RD006', 'Mega World', 'chewbot', 40, 8, 8, 8, 8, 30, 30, 30, 30, 'Outsider');

INSERT INTO PLOT(PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType)
VALUES ('RD007', 'Mega World', 'joker', 140, 18, 28, 34, 80, 30, 30, 30, 30, 'Resident');

INSERT INTO PLOT(PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType)
VALUES ('RD008', 'Mega World', 'battman', 20, 10, 10, 10, 10, 0, 0, 0, 0, 'Resident');

INSERT INTO PLOT(PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType)
VALUES ('RD009', 'Ryanopolis', 'robinbird', 20, 10, 10, 10, 10, 0, 0, 0, 0, 'Resident');

INSERT INTO PLOT(PlotId, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType)
VALUES ('RD010', 'Ryanopolis', 'newGuy', 40, 10, 10, 10, 10, 100, 100, 100, 100, 'Resident');
