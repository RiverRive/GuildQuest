
/* Accounts */
INSERT INTO ACCOUNT(Email, Username, Password, Role, DateSignedUp, LeaderboardRanking, Balance, MoneySpent, IsBanned) 
VALUES("rhonegavois@gmail.com", "RiverGuy", "R12345", "Admin", "2021-02-19", 37, 0.00, 0.00, True);

INSERT INTO ACCOUNT(Email, Username, Password, Role, DateSignedUp, LeaderboardRanking, Balance, MoneySpent, IsBanned) 
VALUES("epenniall0@amazonaws.com", "FluffyMan", "F12345", "User", "2021-02-19", 37, 0.00, 0.00, True);

INSERT INTO ACCOUNT(Email, Username, Password, Role, DateSignedUp, LeaderboardRanking, Balance, MoneySpent, IsBanned) 
VALUES("smertgen1@cbsnews.com", "HalfRoyal", "H12345", "User", "2020-12-09", 26, 14.56, 0.00, False);

INSERT INTO ACCOUNT(Email, Username, Password, Role, DateSignedUp, LeaderboardRanking, Balance, MoneySpent, IsBanned) 
VALUES("roger2@mediafire.com", "Carnivul", "C12345", "User", "2020-09-30", 57, 6.99, 10.00, False);

INSERT INTO ACCOUNT(Email, Username, Password, Role, DateSignedUp, LeaderboardRanking, Balance, MoneySpent, IsBanned) 
VALUES("nomurtagh3@fotki.com", "LimeBat", "L12345", "Mod", "2021-01-13", 3, 100.00, 50.99, False);

INSERT INTO ACCOUNT(Email, Username, Password, Role, DateSignedUp, LeaderboardRanking, Balance, MoneySpent, IsBanned) 
VALUES("hpaolillo4@wsj.com", "YoMama", "Y12345", "Mod", "2020-12-28", 23, 57.35, 67.43, False);

/* Worlds */
INSERT INTO WORLD(WorldID, WorldName, MaxPlots, MaxPlayerCapacity, WorldType, InitialPlotPrices, PvP) 
VALUES("RGW7336296753", "Epic World", 1000, 50, "Public", 1000, True);

INSERT INTO WORLD(WorldID, WorldName, MaxPlots, MaxPlayerCapacity, WorldType, InitialPlotPrices, PvP) 
VALUES("RGW2298814338", "Earth Map", 1000, 50, "Public", 1000, False);

INSERT INTO WORLD(WorldID, WorldName, MaxPlots, MaxPlayerCapacity, WorldType, InitialPlotPrices, PvP) 
VALUES("RGW9931475516", "A Man", 50, 3, "Private", 25, False);

INSERT INTO WORLD(WorldID, WorldName, MaxPlots, MaxPlayerCapacity, WorldType, InitialPlotPrices, PvP) 
VALUES("RGW0819524304", "New World", 500, 20, "Public", 100, True);

INSERT INTO WORLD(WorldID, WorldName, MaxPlots, MaxPlayerCapacity, WorldType, InitialPlotPrices, PvP) 
VALUES("RGW9607895758", "War World", 750, 10, "Public", 5000, True);

/* Quests */
INSERT INTO QUEST(QuestID, QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel) 
VALUES("RGQ5467215082", "Fish", "Collect 5 pieces of fish", 50, 50, 0, 0, 10, "00:00:10.0000000", 1);

INSERT INTO QUEST(QuestID, QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel) 
VALUES("RGQ4751788413", "Coin Lover", "Go into the mines and find a ruby to get coins", 1000, 200, 0, 0, 0, "02:00:00.0000000", 10);

INSERT INTO QUEST(QuestID, QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel) 
VALUES("RGQ6571962062", "Miniboss", "Fight a random miniboss", 100, 200, 100, 50, 30, "00:30:00.0000000", 5);

INSERT INTO QUEST(QuestID, QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel) 
VALUES("RGQ1069358341", "Snake Attack", "Jump into a pool of snakes", 250, 200, 30, 100, 50, "01:00:00.0000000", 20);

INSERT INTO QUEST(QuestID, QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel) 
VALUES("RGQ4378085827", "Quest Hunter", "Complete 100 Quests", 500, 400, 50, 50, 50, "20:00:00.0000000", 1);

INSERT INTO QUEST(QuestID, QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel) 
VALUES("RGQ7332645899", "Fight Me!", "Do a duel with another player", 100, 200, 100, 60, 0, "03:00:00.0000000", 5);

INSERT INTO QUEST(QuestID, QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel) 
VALUES("RGQ8703768353", "I need Money", "Do this quest to get free coins", 100, 0, 0, 0, 0, "00:10:00.0000000", 3);

INSERT INTO QUEST(QuestID, QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel) 
VALUES("RGQ7962021449", "Big Boss", "Fight and defeat the Big Boss", 500, 300, 200, 100, 100, "10:00:00.0000000", 35);

INSERT INTO QUEST(QuestID, QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel) 
VALUES("RGQ2442629866", "House Builder", "Build a house for yourself", 100, 500, 0, 0, 100, "01:00:00.0000000", 12);

INSERT INTO QUEST(QuestID, QuestName, QuestDescription, CoinsGain, ExperienceGain, AttackGain, DefenceGain, HealthGain, TimeLimit, MinLevel) 
VALUES("RGQ5164097032", "Best Quest", "The best quest", 1000, 1000, 1000, 1000, 1000, "00:01:00.0000000", 100);

/* Guilds */
INSERT INTO GUILD(GuildID, GuildName, MaxNumMembers, GuildExperience, GuildLevel) 
VALUES("RGG2261770384", "The Gods", 10, 960, 70);

INSERT INTO GUILD(GuildID, GuildName, MaxNumMembers, GuildExperience, GuildLevel) 
VALUES("RGG2349106350", "Big Bros", 20, 456, 36);

/* Players */
INSERT INTO PLAYER(PlayerID, PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds) 
VALUES("RGP1759075065", "ZeusZGoat", "epenniall0@amazonaws.com", "2021-04-4", 234, 100, 364, 45, 0, 3, NULL, "RGG2261770384", "Leader", "RGW7336296753", 0, 45, 156, 23);

INSERT INTO PLAYER(PlayerID, PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds) 
VALUES("RGP6493417657", "DopeDude", "epenniall0@amazonaws.com", "2021-04-5", 0, 200, 365, 0, 32, 2, NULL, NULL, NULL, "RGW2298814338", 125, 126, 345, 45);

INSERT INTO PLAYER(PlayerID, PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds) 
VALUES("RGP5331816689", "TheBeast", "epenniall0@amazonaws.com", "2021-04-6", 436, 399, 234, 345, 90, 10, NULL, NULL, NULL, "RGW9607895758", 123, 234, 0, 5);

INSERT INTO PLAYER(PlayerID, PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds) 
VALUES("RGP2480902755", "Ludwig", "epenniall0@amazonaws.com", "2021-04-8", 0, 546, 163, 0, 453, 15, NULL, NULL, NULL, "RGW9931475516", 456, 765, 865, 78);

INSERT INTO PLAYER(PlayerID, PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds) 
VALUES("RGP0812984273", "HappySteve", "smertgen1@cbsnews.com", "2021-04-1", 274, 0, 234, 123, 0, 30, NULL, "RGG2261770384", "Member", "RGW7336296753", 0, 543, 865, 0);

INSERT INTO PLAYER(PlayerID, PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds) 
VALUES("RGP2828338608", "RoyalRun", "smertgen1@cbsnews.com", "2021-03-29", 100, 340, 547, 569, 354, 50, NULL, NULL, NULL, "RGW2298814338", 123, 0, 234, 354);

INSERT INTO PLAYER(PlayerID, PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds) 
VALUES("RGP9936452670", "DenseDude", "smertgen1@cbsnews.com", "2021-04-2", 50, 469, 65, 587, 0, 2, NULL, NULL, NULL, "RGW9931475516", 562, 644, 234, 0);

INSERT INTO PLAYER(PlayerID, PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds) 
VALUES("RGP2181003699", "DeathFront", "roger2@mediafire.com", "2021-03-25", 264, 0, 956, 0, 900, 1, "Donor", "RGG2349106350", "Elder", "RGW7336296753", 535, 43, 234, 25);

INSERT INTO PLAYER(PlayerID, PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds) 
VALUES("RGP1209173014", "MusicPool", "nomurtagh3@fotki.com", "2021-02-15", 789, 366, 685, 865, 0, 100, "SuperDonor", "RGG2349106350", "Leader", "RGW7336296753", 0, 53, 463, 34);

INSERT INTO PLAYER(PlayerID, PlayerName, Account, DateLastLogged, Experience, Coins, Attack, Defence, Health, Level, TitleRank, Guild, GuildPosition, World, Wood, Fish, Food, Diamonds) 
VALUES("RGP8013197053", "BossBros", "nomurtagh3@fotki.com", "2021-02-28", 456, 0, 285, 35, 756, 23, "SuperDonor", NULL, NULL, "RGW9607895758", 23, 0, 0, 34);

/* Plots */
INSERT INTO PLOT(PlotID, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType) 
VALUES("RGL2330013404", "RGW7336296753", "RGP1759075065", 100, 10, 10, 10, 10, 100, 100, 100, 100, "Resident");

INSERT INTO PLOT(PlotID, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType) 
VALUES("RGL6364369785", "RGW7336296753", "RGP1759075065", 50, 20, 20, 0, 0, 80, 80, 0, 0, "Resident");

INSERT INTO PLOT(PlotID, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType) 
VALUES("RGL6987955773", "RGW7336296753", "RGP1759075065", 60, 0, 0, 20, 20, 40, 40, 300, 300, "Ally");

INSERT INTO PLOT(PlotID, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType) 
VALUES("RGL9181749797", "RGW7336296753", "RGP0812984273", 70, 40, 0, 0, 0, 700, 0, 0, 0, "Outsider");

INSERT INTO PLOT(PlotID, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType) 
VALUES("RGL4878996783", "RGW7336296753", "RGP0812984273", 800, 5, 20, 10, 5, 267, 245, 154, 132, "Ally");

INSERT INTO PLOT(PlotID, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType) 
VALUES("RGL5498722918", "RGW7336296753", "RGP2181003699", 200, 30, 10, 5, 0, 264, 213, 534, 0, "Ally");

INSERT INTO PLOT(PlotID, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType) 
VALUES("RGL3367955266", "RGW2298814338", "RGP6493417657", 20, 1, 2, 3, 4, 10, 20, 30, 40, "Resident");

INSERT INTO PLOT(PlotID, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType) 
VALUES("RGL9083967443", "RGW2298814338", "RGP2828338608", 30, 50, 3, 2, 1, 1000, 564, 345, 254, "Resident");

INSERT INTO PLOT(PlotID, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType) 
VALUES("RGL2054411816", "RGW9607895758", "RGP8013197053", 250, 25, 25, 20, 5, 260, 260, 200, 30, "Outsider");

INSERT INTO PLOT(PlotID, World, Owner, DailyUpkeep, DailyWood, DailyFish, DailyFood, DailyDiamond, WoodInventory, FishInventory, FoodInventory, DiamondInventory, PermissionType) 
VALUES("RGL2527794376", "RGW9931475516", "RGP2480902755", 130, 15, 10, 6, 3, 509, 568, 265, 115, "Outsider");


