<!DOCTYPE html>
<html>

<head>
    <style>
        .container {
            background-color: #191a1e;
            display: flex;
            flex-direction: column;
            width: 300px;
            height: 530px;
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
            padding: 10px 0px;
            font-weight: 600;
            margin: 10px auto;
            display: flex;
            justify-content: center;
            align-items: center;
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
    <div class="container">
        <h1 class="title">Verifikasi Email Kamu</h1>
        <p class="desc-text">
            Halo, {{ $name }}! Data registrasi kamu telah berhasil kami
            terima. Verifikasi email kamu dengan mengklik tombol dibawah
            ini:
        </p>
        <a class="verify-btn" href="{{ $app_url . '/verify/' . $token }}"
            >Verifikasi Email</a
        >
        <p class="desc-text">
            Jika kamu tidak membuat akun, tidak perlu melanjutkan proses
            verifikasi.
        </p>
        <p class="greetings-1-text">Salam,</p>
        <p class="greetings-2-text">ISE! 2023</p>
        <hr />
        <p class="contactus-1-text">Ada pertanyaan? </p>
        <p class="contactus-2-text">Silakan hubungi kami</p>
        <a
            href="https://wa.me/+6282329737745"
            class="contactus-btn"
            target="blank"
            ><svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="phone-icon"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z"
                />
            </svg>
            Contact us</a
        >
    </div>
</body>

</html>
