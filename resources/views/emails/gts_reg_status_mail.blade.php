<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
    <style>
        .container {
            background-color: #191a1e;
            width: 300px;
            height: max-content;
            font-family: "Open Sans", sans-serif;
            padding: 1rem 2rem;
            margin: auto;
            color: white;
            border-radius: 16px 0px 16px 0px;
            justify-items: center;
            text-align: center;
            font-family: Poppins, sans-serif;
        }

        .title {
            font-weight: 700;
            font-size: 24px;
            color: white;
        }

        .desc-text {
            font-weight: 500;
            font-size: 18px;
            text-align: justify;
            margin: 8px auto;
        }

        .greetings-1-text {
            margin: 0;
            text-align: left;
            font-weight: 500;
            font-size: 18px;
        }

        .greetings-2-text {
            margin: 0;
            text-align: left;
            font-weight: 700;
            font-size: 18px;
        }

        .greetings-text:second-child {
            font-weight: 700;
            font-size: 18px;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .btn {
            background: linear-gradient(to right, #006c56, #afd196);
            border-radius: 10px;
            width: 200px;
            font-size: 16px;
            font-weight: 600;
            padding: 8px 0px;
            margin: 12px auto;
        }

        .btn:hover {
            opacity: 0.8;
        }

        .status-ok {
            background: linear-gradient(to right, #006c56, #afd196);
            border-radius: 10px;
            width: 150px;
            font-size: 16px;
            padding: 10px 20px;
            font-weight: 600;
            text-align: center;
            margin: 0 auto;
            gap: 10px;
        }


        .status-bad {
            background: linear-gradient(to right, #6c0000, #cc6464);
            border-radius: 10px;
            width: 150px;
            font-size: 16px;
            padding: 10px 20px;
            font-weight: 600;
            margin: 0 auto;
            gap: 10px;
        }


        .contactus-1-text {
            margin: 10px 0px 0px 0px;
            font-weight: 500;
            font-size: 18px;
            text-align: center;
            color: #b5b3bc;
        }

        .contactus-2-text {
            margin: 2px 0px 0px 0px;
            font-weight: 500;
            font-size: 18px;
            text-align: center;
            color: #b5b3bc;
        }

        .contactus-btn {
            background: #3d3e41;
            border-radius: 10px;
            width: 150px;
            font-size: 16px;
            padding: 10px 20px;
            text-align: center;
            font-weight: 600;
            margin: 20px auto;
            gap: 10px;
        }


        .contactus-btn:hover {
            opacity: 0.8;
        }

        .phone-icon {
            width: 20px;
            height: 20px;
        }

        td {
            text-align: center;
            vertical-align: middle
        }

        tr {
            text-align: center
        }

        hr {
            width: 100%;
            border: 1px solid #afd196;
        }
    </style>
</head>

<body>
    <table class="container" class="container" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td class="title">Status Pendaftaran GTS</td>
        </tr>
        <tr>
            <td>
                <p style="margin: 30px 0px"></p>
            </td>
        </tr>
        <tr>
            <td class="desc-text">
                Halo, {{ $name }}! Terima kasih telah mendaftar sebagai
                peserta Grand Talk Show 2023. Pendaftaran kamu telah:
            </td>
        </tr>
        <tr>
            <td>
                <p style="margin: 20px 0px"></p>
            </td>
        </tr>
        @if (!$isVerified)
            <!-- If Rejected Start -->
            <tr>
                <td>
                    <a class="status-bad" href="">Tertolak</a>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin: 20px 0px"></p>
                </td>
            </tr>
            <tr>
                <td class="desc-text">
                    Pendaftaran GTS kamu telah ditolak karena kamu telah
                    mendaftar ke acara Grand Talk Show 2023 sebelumnya.
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin: 30px 0px"></p>
                </td>
            </tr>
            <tr>
                <td class="desc-text">
                    Silahkan daftar kembali ke acara Grand Talk Show 2023
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin: 15px 0px"></p>
                </td>
            </tr>
            <tr>
                <td class="btn">
                    <a href="">Daftar Kembali!</a>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin: 10px 0px"></p>
                </td>
            </tr>
            <!-- If Rejected End -->
        @else
            <!-- If Accepted Start -->
            <tr>
                <td>
                    <a class="status-ok" href="">Terverifikasi</a>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin: 20px 0px"></p>
                </td>
            </tr>
            <tr>
                <td class="desc-text">
                    Silahkan cek event lainnya di Information Systems Expo 2023!
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin: 10px 0px"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <a class="contactus-btn" href="">More</a>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin: 10px 0px"></p>
                </td>
            </tr>
            <!-- If Accepted End -->
        @endif

        <tr>
            <td class="greetings-1-text">Salam,</td>
        </tr>
        <tr>
            <td class="greetings-2-text">ISE! 2023</td>
        </tr>
        <tr>
            <td>
                <hr />
            </td>
        </tr>
        <tr>
            <td class="contactus-1-text">Ada pertanyaan?</td>
        </tr>
        <tr>
            <td class="contactus-2-text">Silakan hubungi kami</td>
        </tr>
        <tr>
            <td>
                <p style="margin: 20px 0px"></p>
            </td>
        </tr>
        <tr>
            <td>
                <a href="https://wa.me/+6282329737745" class="contactus-btn" target="blank">
                    Contact us</a>
            </td>
        </tr>
        <tr>
            <td>
                <p style="margin: 10px 0px"></p>
            </td>
        </tr>
    </table>
</body>

</html>
