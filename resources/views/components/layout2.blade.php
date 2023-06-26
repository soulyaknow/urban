<!DOCTYPE html>

<html lang="en-PH">
<head>
    <meta charset="UTF-8">
    <title>Urban Couture</title>

    <meta name="author" content="One Team One Goal">
    <meta name="keywords" content="Urban Couture Products, Dresses, T-shirts">
    <meta name="description" content="Modern Urban Couture Products for Mean and Women">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap.css">
    <link rel="icon" type="image/x-icon" href="site-logo/UrbanCouture.png">
    <link rel="stylesheet" href="Font-awesome/css/all.min.css">
</head>
<style>
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	font-family: Verdana, Georgia, "Times New Roman";
	font-size: 1vw;
}

div.header-container {
	width: 100%;
	margin: auto;
	color: #000000;
}

header#main-header {
	display: flex;
	align-items: center;
	padding: 15px;
}

header#main-header h1 {
	font-size: 1.2vw;
	font-family: Helvetica;
	position: relative;
	left: 6%;
	color: #000000;
}

header#main-header .search-bar {
	position: relative;
	left: 16%;
}

header#main-header .icons {
	position: relative;
	left: 27%;
	width: 155px;
	display: flex;
	justify-content: space-between;
}

header#main-header .search-bar i {
	font-size: 1.2vw;
	margin-right: 8px;
	opacity: 0.5;
}

header#main-header .search-bar input[type="search"] {
	border: 1px solid rgba(0, 0, 0, 0.4);
	padding: 8px 15px;
	width: 600px;
	outline: none;
}

header#main-header .search-bar input[type="search"]:hover,
header#main-header .search-bar input[type="search"]:focus {
	border: 1px solid #43CBF5;
	transition: all 0.3s ease 0s;
}

header#main-header .search-bar input::placeholder {
	font-size: 0.85vw;
	letter-spacing: 0.1em;
	opacity: 0.5;
}

/* Dashboard Section */
section.dashboard-container {
	width: 100%;
	margin: auto;
}

section.dashboard-container .dashboard-content {
	display: flex;
}

div.dashboard-content .left-side-content {
	width: 20%;
	padding: 30px 0 45px 0;
/*	padding: 30px 45px 45px 45px;*/
}

div.left-side-content .admin-profile {
	display: flex;
	align-items: center;
}

div.admin-profile {
	width: 70%;
	margin: auto;
}

div.admin-profile img {
	border-radius: 50%;
	margin-right: 10px;
}

div.admin-info p {
	font-size: 0.9vw;
}

div.admin-info small {
	font-size: 0.7vw;
}

div.selections {
	margin-top: 30px;
}

div.selections i {
	margin-right: 12px;
}

div.selection {
	display: flex;
	justify-content: space-between;
	align-items: center;
	margin-bottom: 20px;
}

div.selection a {
	text-decoration: none;
	color: #000000;
	font-size: 0.9vw;
}

div.selection a:hover {
	transition: all 0.3s ease 0s;
	color: #43CBF5;
}

div.selection i {
	font-size: 0.8vw;
	opacity: 0.8;
}

div.selection button {
	border: none;
	padding: 8px 15px;
}

div.selections button#dashboard,
div.selections button#messages,
div.selections button#add-products,
div.selections button#history,
div.selections button#inventory,
div.selections button#sales-report,
div.selections button#users,
div.selections button#blocked-users {
	padding: 18px 25px;
	border: none;
	outline: none;
	width: 100%;
	text-align: left;
	background-color: #ffffff;
	display: block;
}

div.selections button#dashboard {
	background-color: #007CFF;
	color: #ffffff;
}

div.selections button#dashboard:hover,
div.selections button#add-products:hover,
div.selections button#history:hover,
div.selections button#inventory:hover,
div.selections button#sales-report:hover,
div.selections button#users:hover,
div.selections button#blocked-users:hover,
div.selections button#messages:hover {
	background-color: #007CFF;
	color: #ffffff;
	cursor: pointer;
	transition: all 0.3s ease 0s;
}

div.right-side-content {
	background-color: #F6F6F5;
	width: 80%;
	margin: 0 auto 0 auto;
	padding: 40px;
}

div.main-dashboard .logo {
	display: flex;
	align-items: center;
}

div.main-dashboard .logo i {
	margin-right: 8px;
}

/*div.main-dashboard img {
	margin-right: 8px;
}*/

div.right-side-content .main-dashboard h2 {
	font-size: 1vw;
	font-family: Helvetica;
}

div.box-container {
	display: flex;
	align-items: center;
	justify-content: space-between;
	margin-top: 25px;
}

div.box-container .box1,
div.box-container .box2,
div.box-container .box3 {
	width: 33.3%;
}

div.box-1 {
	background-image: linear-gradient(to right, #C995F8, #BB81F5);
	color: #ffffff;
	border-radius: 10px;
}

div.box-2 {
	background-image: linear-gradient(to right, #59ABE7, #6465D3);
	color: #ffffff;
	border-radius: 10px;
}

div.box-3 {
	background-image: linear-gradient(to right, #FAC093, #F48F92);
	color: #ffffff;
	border-radius: 10px;
}

div.box-content {
	margin: 30px 192px 80px 22px;
}

div.box-container .box-1 i,
div.box-container .box-2 i,
div.box-container .box-3 i {
	font-size: 1.4vw;
	display: block;
	margin-bottom: 15px;
}

div.box-container .box-1 small,
div.box-container .box-2 small,
div.box-container .box-3 small {
	font-size: 0.7vw;
	display: block;
	margin: 10px 0 5px 0;
}

div.table-container {
	width: 100%;
	margin: auto;
	background-color: #ffffff;
	margin-top: 30px;
	height: 92vh;
	padding: 40px 25px 25px 25px;
	overflow-y: scroll;
	box-shadow: 1px 1px 6px #A0A0A0;
}

table#dashboard-table {
	width: 95%;
	margin: auto;
	color: #000000;
}

table#dashboard-table, th, td {
	border: 1px solid #000000;
	padding: 18px;
	text-align: left;
	border: none;
	font-weight: normal;
	border-collapse: collapse;
}

table#dashboard-table tr:nth-child(even) {
	background-color: #F2F2F2;
	border-radius: 3px;
}

table#dashboard-table tr:hover {
	background-color: #DDDDDD;
	transition: all 0.3s ease 0s;
}

table#dashboard-table caption {
	font-family: Helvetica;
	text-align: left;
	font-size: 13px;
	margin-bottom: 18px;
}

table#dashboard-table th {
	font-size: 13.5px;
	font-weight: bold;
	font-family: Helvetica;
}

table#dashboard-table td {
	font-size: 0.85vw;
	font-family: Helvetica;
}

table#dashboard-table .active {
	padding: 6px 25px;
	border: none;
	font-size: 0.9vw;
	background-color: #4FB06D;
	color: #ffffff;
}

table#dashboard-table .blocked {
	padding: 6px 25px;
	border: none;
	font-size: 0.9vw;
	background-color: #F62221;
	color: #ffffff;
}


div.right-side-content .logo h2 {
	font-size: 16px;
	font-family: Helvetica;
}

div.box-container {
	display: flex;
	align-items: center;
	justify-content: space-between;
	margin-top: 25px;
}

div.box-container .box1,
div.box-container .box2,
div.box-container .box3 {
	width: 33.3%;
}

div.box-1 {
	background-image: linear-gradient(to right, #C995F8, #BB81F5);
	color: #ffffff;
	border-radius: 10px;
}

div.box-2 {
	background-image: linear-gradient(to right, #59ABE7, #6465D3);
	color: #ffffff;
	border-radius: 10px;
}

div.box-3 {
	background-image: linear-gradient(to right, #FAC093, #F48F92);
	color: #ffffff;
	border-radius: 10px;
}

div.box-content {
	margin: 30px 192px 80px 22px;
}

div.box-container .box-1 i,
div.box-container .box-2 i,
div.box-container .box-3 i {
	font-size: 1.4vw;
	display: block;
	margin-bottom: 15px;
}

div.box-container .box-1 small,
div.box-container .box-2 small,
div.box-container .box-3 small {
	font-size: 0.7vw;
	display: block;
	margin: 10px 0 5px 0;
}

div.table-container {
	width: 100%;
	margin: auto;
	background-color: #ffffff;
	margin-top: 30px;
	height: 90vh;
	padding: 25px;
	overflow-y: scroll;
}

table#dashboard-table {
	width: 95%;
	margin: auto;
	color: #000000;
}

table#dashboard-table, th, td {
	border: 1px solid #000000;
	padding: 18px;
	text-align: left;
	border: none;
	font-weight: normal;
}

table#dashboard-table caption {
	font-family: Helvetica;
	text-align: left;
	font-size: 1vw;
}

table#dashboard-table th {
	font-size: 0.9vw;
	font-weight: bold;
	font-family: Georgia;
}

table#dashboard-table td {
	font-size: 0.85vw;
	font-family: Helvetica;
}

table#dashboard-table .status {
	padding: 6px 25px;
	border: none;
	font-size: 0.9vw;
	background-color: #38AFF1;
	color: #ffffff;
}

table#dashboard-table .status:hover {
	background-color: #279EE0;
	color: #ffffff;
	transition: all 0.3s ease 0s;
}
ul li{
	list-style-type: none;
}
</style>
<body>
    {{ $slot }}
</body>
</html>