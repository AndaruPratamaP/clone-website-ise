<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />

        <style>
            .body {
                color: white;
            }
            .container {
                background-color: #191a1e;
                width: 375px;
                height: max-content;
                font-family: "Open Sans", sans-serif;
                padding: 1rem 2rem;
                margin: auto;
                color: white;
                border-radius: 16px 0px 16px 0px;
                justify-items: center;
                text-align: center;
                font-family: Poppins, sans-serif;
                width: 100% !important;
                min-width: 100% !important;
            }

            .title {
                font-weight: 700;
                font-size: 24px;
                color: white;
            }

            .desc-text {
                font-weight: 500;
                font-size: 18px;
                text-align: center;
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
                display: block;
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
                text-align: center;
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
                vertical-align: middle;
            }

            tr {
                text-align: center;
            }

            hr {
                width: 100%;
                border: 1px solid #afd196;
            }
        </style>
    </head>

    <body>
        <table
            class="container"
            class="container"
            cellpadding="0"
            cellspacing="0"
            border="0"
        >
            <tr>
                <td class="title">Status Seleksi {{ $eventName }}</td>
            </tr>
            <tr>
                <td>
                    <p style="margin: 30px 0px"></p>
                </td>
            </tr>
            <tr>
                <td class="desc-text">
                    Halo, {{ $name }}! Terima kasih telah menegerjakan soal
                    seleksi yang telah kami berikan. Status seleksi kamu adalah:
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin: 20px 0px"></p>
                </td>
            </tr>
            @if (!$isVerified || $isRejected)
            <!-- If Rejected or Revised Start -->
            <tr>
                <td>
                    <p class="status-bad">Gagal</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin: 20px 0px"></p>
                </td>
            </tr>
            <tr>
                <td class="desc-text">{{ $reason }}</td>
            </tr>
            <tr>
                <td>
                    <p style="margin: 30px 0px"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin: 10px 0px"></p>
                </td>
            </tr>
            <!-- If Rejected or Revised End -->
            @else
            <!-- If Accepted Start -->
            <tr>
                <td>
                    <p class="status-ok">Lolos</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin: 20px 0px"></p>
                </td>
            </tr>
            <tr>
                <td class="desc-text">
                    Silahkan tunggu informasi selanjutnya dari kami. Panitia
                    kami akan segera menghubungi kamu untuk proses selanjutnya.
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin: 20px 0px"></p>
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
                    <a
                        href="https://wa.me/+6281332049750"
                        class="contactus-btn"
                        target="blank"
                    >
                        Contact us</a
                    >
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
