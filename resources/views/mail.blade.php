<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="zenah" content="Zeenah Receipt" />
    <link rel="apple-touch-icon" href="%PUBLIC_URL%/zenahLogo.png" />

    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />

    <title>Zeenah</title>
</head>
<style>
    .Htext{
        width: 700px;
    }
    .TrxnTable{
        width: 100%;
    }
    @media screen and (max-width: 1000px) {
        .Htext {
            width: 40%;
        }

    }

    @media screen and (max-width: 768px) {
        .Htext {
            width: 40%;
        }


        .TrxnTable {
            border-spacing: 10px;
            font-size: 12px;
            max-width: 750px;
        }
        .container{
            max-width:100%;
        }
    }
</style>

<body>
<div>
    <div class="container" style="color: #500772; padding: 30px; display: grid; font-family: Helvetica;">
        <div>
            <span class="Htext" style="padding-right: 30%;
            float: left;
            border-bottom: 5px solid;
            border-right: 1px solid;
            font-weight: bold;
            font-size: 26px;
            height: 60px;">
                <div class="H1" style="
                margin-top: 20px;">RECEIPT</div>
            </span>
            <img src="../src/assets/zeenahLogo.png" style="width: 60px;
            height: 60px;
            cursor: pointer;
            padding-right: 10px; margin-left: 10px;" />
        </div>
        <div style="display: grid;
        align-items: left; 
        float: left;
        text-align: left;
        margin-bottom: 20px;">
            <span style="text-transform: uppercase;
            font-size: 12px;
            font-weight: bold;
            display: block;
            padding: 2px;
            margin-top: 5px;">Sender full name</span>
            <span style="font-weight: bold;
            font-size: 16px;
            display: block;
            padding: 2px;">Amount: $xxx</span>
            <span style="font-size: 14px;
            display: block;
            padding: 2px;">Status: Success</span>
            <span style="font-size: 14px;
            display: block;
            padding: 2px;">Date: April 25, 2025 | 15:00</span>
        </div>
        <div>
            <hr style="border-top: 2px dotted;">
            <div style="color: black;
            font-size: 14px;
            text-align: left;
            margin-left: 10px;
            padding: 8px;
            font-weight: bold;">Transction Details</div>
        </div>
        <table class="TrxnTable" style="
        border-spacing: 10px;
        border-top: 2px dotted;
        border-bottom: 2px dotted;
        margin-bottom: 20px;">
            <tr>
                <th style="text-align: left;">Transaction Type</th>
                <td style="text-align: right">Bank Transfer</td>
            </tr>
            <tr>
                <th style="text-align: left;">Sender Name</th>
                <td style="text-align: right">John Doe</td>
            </tr>
            <tr>
                <th style="text-align: left;">Recipient Name</th>
                <td style="text-align: right">Abasi-Ibianke Chukwuhadibia</td>
            </tr>
        </table>
        <table>
            <tr>
                <th style="text-align: left;">Order ID</th>
                <td style="text-align: right">xxxxxxxxxxxxxxxx</td>
            </tr>
        </table>
        <div style="max-width: 100%;
        margin-top: 20px">
            <div style="font-size: 16px;
            text-align: left;
            padding: 10px;">
                Reference: Test
            </div>
            <table>
                <tr>
                    <th style="text-align: left;
                    font-size: 16px;">Account No</th>
                    <th style="text-align: left;
                    font-size: 16px;">Bank Name</th>
                </tr>
                <tr>
                    <td style="text-align: right;
                    font-size: 16px;
                    padding-right: 10px;">123-456-7890</td>
                    <td style="text-align: right;
                    font-size: 16px;
                    padding-right: 10px;">Borcelle Bank</td>
                </tr>
            </table>
        </div>
        <div style="margin-top: 40px;"><span style="padding-right: 30%;
            float: left;
            font-weight: bold;
            font-size: 20px;
            width: 700px;">
                <div style="margin-left: -40vw;
    margin-top: 20px;
    font-family: Holiday;">Congrats</div>
            </span>
            <img src="../src/assets/icon_16.png" style="width: 140px;
    height: 140px;
    cursor: pointer;
    padding-right: 10px;" />
        </div>
    </div>
</body>

</html>