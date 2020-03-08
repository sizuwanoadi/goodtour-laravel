<!DOCTYPE html>
<html>

<head>
    <title>Hi</title>
    <style>
        @font-face {
            font-family: SourceSansPro;
            src: url(SourceSansPro-Regular.ttf);
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #0087C3;
            text-decoration: none;
        }

        body {
            position: relative;
            width: 21cm;
            height: 29.7cm;
            margin: 0 auto;
            color: #555555;
            background: #FFFFFF;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-family: SourceSansPro;
        }

        header {
            padding: 10px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #AAAAAA;
        }

        #logo {
            float: left;
            margin-top: 30px;
        }

        #logo img {
            height: 40px;
        }

        #company {
            float: right;
            margin-right: 200px;
            text-align: right;
        }


        #details {
            margin-bottom: 30px;
        }

        #client {
            padding-left: 6px;
            border-left: 6px solid #0087C3;
            float: left;
        }

        #client .to {
            color: #777777;
        }

        h2.name {
            font-size: 1.4em;
            font-weight: normal;
            margin: 0;
        }

        #invoice {
            float: left;
            text-align: left;
        }

        #invoice h1 {
            color: #0087C3;
            font-size: 2em;
            line-height: 1em;
            font-weight: normal;
            margin: 0 0 10px 0;
        }

        #invoice .date {
            font-size: 1.1em;
            color: #777777;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        table th,
        table td {
            padding: 5px;
            background: #EEEEEE;
            text-align: center;
            border-bottom: 1px solid #FFFFFF;
        }

        table th {
            white-space: nowrap;
            font-weight: normal;
        }

        table td {
            text-align: right;
        }

        table td h3 {
            color: #1E55A9;
            font-size: 1.2em;
            font-weight: normal;
            margin: 0 0 0.2em 0;
        }

        table .no {
            color: #FFFFFF;
            font-size: 1.6em;
            background: #1E55A9;
        }

        table .desc {
            text-align: left;
        }

        table .unit {
            background: #DDDDDD;
        }

        table .qty {}

        table .total {
            background: #1E55A9;
            color: #FFFFFF;
        }

        table td.unit,
        table td.qty,
        table td.total {
            font-size: 1.2em;
        }

        table tbody tr:last-child td {
            border: none;
        }

        table tfoot td {
            padding: 10px 20px;
            background: #FFFFFF;
            border-bottom: none;
            font-size: 1.2em;
            white-space: nowrap;
            border-top: 1px solid #AAAAAA;
        }

        table tfoot tr:first-child td {
            border-top: none;
        }

        table tfoot tr:last-child td {
            color: #1E55A9;
            font-size: 1.4em;
            border-top: 1px solid #1E55A9;

        }

        table tfoot tr td:first-child {
            border: none;
        }

        #thanks {
            font-size: 2em;

            margin-bottom: 20px;
        }

        #notices {
            padding-left: 6px;
            border-left: 6px solid #0087C3;
        }

        #notices .notice {
            font-size: 1.2em;
        }

        footer {
            color: #777777;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #AAAAAA;
            padding: 8px 0;
            text-align: center;
        }

    </style>

</head>

<body>
    <header class="clearfix">
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>
                    <div id="logo">
                        <img src="frontend/images/GoodTOur@2x.png" width="">
                    </div>
                </td>
                <td>
                    <div>
                        <h2 class="name">GoodTour</h2>
                        <div>Kabasiran, Parungpanjang</div>
                        <div>0880 - 9090 - 1222</div>
                        <div><a href="#">goodtour@example.com</a></div>
                    </div>
                </td>
            </tr>
        </table>
    </header>
    <main>
        <div id="details" class="clearfix">
            <div id="invoice">
                <h1>Report Dashboard</h1>
                <div class="date">Date of Invoice: 01/06/2014</div>
                <div class="date">Due Date: 30/06/2014</div>
            </div>
        </div>
        <div id="thanks">Master Data</div>
        <table border="0" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th class="no">#</th>
                    <th colspan="3" class="desc">DESCRIPTION</th>
                    <th class="total">QUANTITY</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="no">01</td>
                    <td colspan="3" class="desc">
                        <h3>Travel Packs</h3>a collection of several travels that have been inputted
                    </td>
                    <td class="total">{{$travel_packs}}</td>
                </tr>
                <tr>
                    <td class="no">02</td>
                    <td colspan="3" class="desc">
                        <h3>Countries</h3>the country of origin of some travel on this website
                    </td>
                    <td class="total">{{$countries}}</td>
                </tr>
                <tr>
                    <td class="no">03</td>
                    <td colspan="3" class="desc">
                        <h3>Users</h3>Who use this platform to looking for travel and good holidays
                    </td>
                    <td class="total">{{$user}}</td>
                </tr>
                <tr>
                    <td class="no">04</td>
                    <td colspan="3" class="desc">
                        <h3>Comments</h3> Criticism and suggestions for building this platform to be a best one
                    </td>
                    <td class="total">{{$comments}}</td>
                </tr>
            </tbody>
        </table>
        <div id="thanks">Transaction</div>

        <table border="0" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th class="no">#</th>
                    <th colspan="3" class="desc">DESCRIPTION</th>
                    <th class="total">QUANTITY</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="no">01</td>
                    <td colspan="3" class="desc">
                        <h3>In Cart</h3>a collection of several travels that have been inputted
                    </td>
                    <td class="total">{{$transaction_incart}}</td>
                </tr>
                <tr>
                    <td class="no">02</td>
                    <td colspan="3" class="desc">
                        <h3>Pending</h3>Dthe country of origin of some travel on this website
                    </td>
                    <td class="total">{{ $transaction_pending}}</td>
                </tr>
                <tr>
                    <td class="no">03</td>
                    <td colspan="3" class="desc">
                        <h3>Success</h3>Who use this platform to looking for travel and good holidays
                    </td>
                    <td class="total">{{$transaction_success}}</td>
                </tr>
                <tr>
                    <td class="no">04</td>
                    <td colspan="3" class="desc">
                        <h3>Cancel</h3> Criticism and suggestions for building this platform to be a best one
                    </td>
                    <td class="total">{{$transaction_cancel}}</td>
                </tr>
                <tr>
                    <td class="no">05</td>
                    <td colspan="3" class="desc">
                        <h3>Failed</h3> Criticism and suggestions for building this platform to be a best one
                    </td>
                    <td class="total">{{$transaction_failed}}</td>
                </tr>
            </tbody>
        </table>
        <div id="notices">
            <div>NOTICE:</div>
            <div class="notice">This is just a beta version, don't steal this.</div>
        </div>
    </main>
    <footer>
        &copy; Copyright by GoodTour | Report was created on a computer and is valid without the signature and seal.
    </footer>

</body>

</html>
