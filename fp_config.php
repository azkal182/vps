<?php
error_reporting(0);
$config = array(
	Coin		=>	"DGB",	//Coin you Want Use Dice, Example BTC, DASH, LTC, DOGE, ETH, DGB, BCH

	Cookie		=>	"__cfduid=dd2ea3ef76b89e168a2affe77b2d478b11586234958; faucetpay=dmtglm5j7jb4eqsp07p20448vi; _ga=GA1.2.935747832.1586234959; _gid=GA1.2.352807703.1586234959; _gat_gtag_UA_154633790_1=1; sc_is_visitor_unique=rx12149426.1586234988.EE92008145CD4FF866D87AD23A5C386D.1.1.1.1.1.1.1.1.1",	//Your Cookie For Login Script
	Name		=>	"FaucetPay Dice, by: RBS Terra",
	Base_Bet	=>	"0.01",	//Base Bet For Frist Roll, Example 0.00000001

	//Your Win Chance Want use ,Example Min 1 and Max 94
	Min_winChance	=>	"1", //Win Chance Minimum 1
	Max_winChance	=>	"94", //Win Chance Maximum 94

	//Change Bet if Lose or If Win, Using Percent
	if_lose		=>	"120", //Change Bet If Lose, Example 100 for 2x Bet if Lose
	if_win		=>	"20", //Change Bet if Win, Example 20 for 0.2x Bet if Win

	//Choise 1 for HI ,2 for Low, 3 for Random
	Bet_on		=>	"3", //Only Write 1, 2, or 3

	//Refresh to Base Bet if Profit
	Refresh		=>	"0.001", //Refresh if Profit, Example 0.001
	Stop_Profit =>	"100", //Stop If Profit to Target, Example 100.00

	//Reset Next if Win
	Roll_win	=>	"3"	//If Win Bet Change for How Much Roll, Example 1, 2, 3, 4, 5, etc.
	);
$json = json_encode($config);
