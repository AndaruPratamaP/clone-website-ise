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
        }

        .desc-text {
            font-weight: 500;
            font-size: 18px;
            text-align: justify;
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

        .verify-btn {
            background: linear-gradient(to right, #006c56, #afd196);
            border-radius: 24px;
            width: 200px;
            text-align: center;
            font-size: 16px;
            font-weight: 600;
            padding: 16px 40px;
            margin: 24px auto;
        }

        .verify-btn:hover {
            opacity: 0.8;
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
            padding: 10px 6px;
            font-weight: 600;
            text-align: center;
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

        hr {
            width: 100%;
            border: 1px solid #afd196;
        }
    </style>
</head>

<body>
    <table class="container" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td class="title">Verifikasi Email Kamu</td>
        </tr>
        <tr>
            <td>
                <p style="margin: 20px 0px"></p>
            </td>
        </tr>
        <tr>
            <td class="desc-text">
                Halo, {{ $name }}! Data registrasi kamu telah berhasil kami
                terima. Verifikasi email kamu dengan mengklik tombol dibawah
                ini:
            </td>
        </tr>
        <tr>
            <td>
                <p style="margin: 40px 0px"></p>
            </td>
        </tr>
        <tr>
            <td>
                <a class="verify-btn" href="{{ $app_url . '/verify/' . $token }}">Verifikasi Email</a>
            </td>
        </tr>
        <tr>
            <td>
                <p style="margin: 40px 0px"></p>
            </td>
        </tr>
        <tr>
            <td class="desc-text">
                Jika kamu tidak membuat akun, tidak perlu melanjutkan proses
                verifikasi.
            </td>
        </tr>
        <tr>
            <td>
                <p style="margin: 10px 0px"></p>
            </td>
        </tr>
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
                <a href="https://wa.me/+6281332049750" class="contactus-btn" target="blank">
                    Hubungi Kami</a>
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
