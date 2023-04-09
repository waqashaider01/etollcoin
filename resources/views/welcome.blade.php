<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>etollcoin</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300&display=swap");

      * {
        font-family: "barlow";
        color: #ffffff;
        line-height: 19px;
      }

      .bgB {
        background-color: #003155;
        background-size: cover;
      }
      body {
        background-color: #003155;
        background-size: cover;
      }

      .btnCon {
        background: #10cb6c;
        box-shadow: 0px 0px 8px rgba(16, 203, 108, 0.5);
        border-radius: 100px;
      }

      .conBg {
        background: url("./images/bg1.png");
        background-size: cover;
      }

      .mainText {
        font-family: "Barlow";
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
        line-height: 58px;

        color: #ffffff;
      }

      .leBtn {
        border: 1px solid #10cb6c;
        filter: drop-shadow(0px 0px 8px rgba(16, 203, 108, 0.49));
        border-radius: 100px;
        color: #0eb869;
      }
      .leBtn:hover {
        border: 1px solid #10cb6c;
        background-color: #0eb869;
        color: #000;
      }

      .colorG {
        color: #0eb869;
      }

      .t2 {
        font-family: "Barlow";
        font-style: normal;
        font-weight: 700;
        font-size: 36px;
        line-height: 43px;

        color: #ffffff;
      }

      .pa1 {
        font-family: "Inter";
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 19px;

        color: #b4b4b4;
      }

      .avatarImg {
        border-radius: 100px;
        aspect-ratio: 1;
      }

      .pa2 {
        font-family: "Inter";
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
        line-height: 18px;

        color: #10cb6c;
      }
      .a1 {
        font-size: 14px;
      }
      .he1 {
        line-height: 0px;
      }
      .store {
        background: #1a1a1a;
        mix-blend-mode: normal;
        border: 1px solid #10cb6c;
        border-radius: 7px;
      }
      .store:hover {
        background-color: #1a1a1a;
        border: 1px solid #ffff;
      }
      .p3 {
        font-family: "Barlow";
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 24px;
      }
      .navI:hover {
        border-bottom: 1px solid #0ca767;
      }
      .alink {
        text-decoration: none;
      }
      .p10 {
        padding-top: 5rem;
      }
      .p5 {
        padding: 5.3rem;
      }
      @media only screen and (max-width: 600px) {
        /*Big smartphones [426px -> 600px]*/
        .p5 {
          padding: 2rem;
        }
      }
    </style>
  </head>

  <body>
    <div class="container-fluiid bgB">
      <!-- navbar -->
      <nav class="navbar navbar-expand-lg">
        <div class="container d-flex justify-content-between">
          <a class="navbar-brand" href="#">
            <img src="./images/logo.png" alt="" width="200px" />
          </a>

          <div class="collapse navbar-collapse" id="navbarScroll">
            <div class="mx-auto">
              <ul
                class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
                style="--bs-scroll-height: 100px"
              >
                <li class="nav-item navI mx-3">
                  <a
                    class="nav-link active text-white"
                    aria-current="page"
                    href="#"
                    >About</a
                  >
                </li>
                <li class="nav-item navI mx-3">
                  <a class="nav-link p1 text-white" href="#">Team</a>
                </li>
                <li class="nav-item navI mx-3">
                  <a class="nav-link p1 text-white" href="#">Buy Coin</a>
                </li>

                <li class="nav-item navI mx-3">
                  <a class="nav-link p1 text-white">Tokken</a>
                </li>
                <li class="nav-item navI mx-3">
                  <a class="nav-link p1 text-white">Whitepapers</a>
                </li>
                <li class="nav-item navI mx-3">
                  <a class="nav-link p1 text-white">FAQ</a>
                </li>
              </ul>
            </div>
          </div>

          <form class="d-flex" role="search">
            <button class="btn btnCon" type="submit">Contact Us</button>
          </form>
          <button
            class="navbar-toggler btn btn-success"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarScroll"
            aria-controls="navbarScroll"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
      <!-- navbar end -->
      <!-- hero section -->
     <div class="container-fluid">
      <div class="conBg my-5 pt-5 pe-0">
        <div class="row">
          <div class="col-md-6 pt-5 d-flex justify-content-end">
            <div>
              <p class="mainText mt-5">
                Welcome to eToll<span class="colorG">Coin</span>,<br />
                the fast and convenient<br />
                way to pay your toll<br />
                fees!
              </p>
              <small class="my-3 pa1">eTollCoin is a revolutionary digital currency that<br />
                allows you to pay your toll fees without the hassle<br />
                of carrying cash or credit cards. With eTollCoin, you<br />
                can make toll payments instantly and securely from<br />
                anywhere in the world.</small>
              <div class="my-5 py-2">
                <button class="btn btnCon px-3 py-2 mx-1">Get Started</button>
                <button class="btn leBtn px-3 py-2 mx-1">Learn More</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 my-2 p-0">
            <img src="./images/right.png" class="img-fluid" alt="rightImg" width="100%" />
          </div>
        </div>
      </div>
     </div>
      <!-- hero section end -->

      <div class="container my-5 bgB p10 p5">
        <!-- getting started section -->
        <div class="row my-5">
          <div class="col-md-6 my-2">
            <p class="t2">Getting started with</p>
            <p class="t2">eToll<span class="colorG">Coin</span> is easy!</p>
            <p class="pa1 my-4">
              With eTollCoin, you can enjoy a fast and convenient toll payment
              experience, all while keeping your personal information secure. So
              why wait? Download the eTollCoin app or visit our website today to
              start using eTollCoin for all your toll payment needs!
            </p>
            <div>
              <div class="d-flex my-3">
                <span
                  ><svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.6 13.8L8.45 11.65C8.26667 11.4667 8.03333 11.375 7.75 11.375C7.46667 11.375 7.23333 11.4667 7.05 11.65C6.86667 11.8333 6.775 12.0667 6.775 12.35C6.775 12.6333 6.86667 12.8667 7.05 13.05L9.9 15.9C10.1 16.1 10.3333 16.2 10.6 16.2C10.8667 16.2 11.1 16.1 11.3 15.9L16.95 10.25C17.1333 10.0667 17.225 9.83333 17.225 9.55C17.225 9.26667 17.1333 9.03333 16.95 8.85C16.7667 8.66667 16.5333 8.575 16.25 8.575C15.9667 8.575 15.7333 8.66667 15.55 8.85L10.6 13.8ZM12 22C10.6167 22 9.31667 21.7373 8.1 21.212C6.88333 20.6867 5.825 19.9743 4.925 19.075C4.025 18.175 3.31267 17.1167 2.788 15.9C2.26333 14.6833 2.00067 13.3833 2 12C2 10.6167 2.26267 9.31667 2.788 8.1C3.31333 6.88333 4.02567 5.825 4.925 4.925C5.825 4.025 6.88333 3.31267 8.1 2.788C9.31667 2.26333 10.6167 2.00067 12 2C13.3833 2 14.6833 2.26267 15.9 2.788C17.1167 3.31333 18.175 4.02567 19.075 4.925C19.975 5.825 20.6877 6.88333 21.213 8.1C21.7383 9.31667 22.0007 10.6167 22 12C22 13.3833 21.7373 14.6833 21.212 15.9C20.6867 17.1167 19.9743 18.175 19.075 19.075C18.175 19.975 17.1167 20.6877 15.9 21.213C14.6833 21.7383 13.3833 22.0007 12 22Z"
                      fill="#10CB6C"
                    />
                  </svg>
                </span>
                <p class="mx-2">
                  Download the eTollCoin mobile app or visit the eTollCoin
                  website and sign up for an account.
                </p>
              </div>
              <div class="d-flex my-3">
                <span
                  ><svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.6 13.8L8.45 11.65C8.26667 11.4667 8.03333 11.375 7.75 11.375C7.46667 11.375 7.23333 11.4667 7.05 11.65C6.86667 11.8333 6.775 12.0667 6.775 12.35C6.775 12.6333 6.86667 12.8667 7.05 13.05L9.9 15.9C10.1 16.1 10.3333 16.2 10.6 16.2C10.8667 16.2 11.1 16.1 11.3 15.9L16.95 10.25C17.1333 10.0667 17.225 9.83333 17.225 9.55C17.225 9.26667 17.1333 9.03333 16.95 8.85C16.7667 8.66667 16.5333 8.575 16.25 8.575C15.9667 8.575 15.7333 8.66667 15.55 8.85L10.6 13.8ZM12 22C10.6167 22 9.31667 21.7373 8.1 21.212C6.88333 20.6867 5.825 19.9743 4.925 19.075C4.025 18.175 3.31267 17.1167 2.788 15.9C2.26333 14.6833 2.00067 13.3833 2 12C2 10.6167 2.26267 9.31667 2.788 8.1C3.31333 6.88333 4.02567 5.825 4.925 4.925C5.825 4.025 6.88333 3.31267 8.1 2.788C9.31667 2.26333 10.6167 2.00067 12 2C13.3833 2 14.6833 2.26267 15.9 2.788C17.1167 3.31333 18.175 4.02567 19.075 4.925C19.975 5.825 20.6877 6.88333 21.213 8.1C21.7383 9.31667 22.0007 10.6167 22 12C22 13.3833 21.7373 14.6833 21.212 15.9C20.6867 17.1167 19.9743 18.175 19.075 19.075C18.175 19.975 17.1167 20.6877 15.9 21.213C14.6833 21.7383 13.3833 22.0007 12 22Z"
                      fill="#10CB6C"
                    />
                  </svg>
                </span>
                <p class="mx-2">
                  Once you've created your account, you can add funds to your
                  eTollCoin wallet. You can do this by linking your bank account
                  or credit card to your eTollCoin account.
                </p>
              </div>
              <div class="d-flex my-3">
                <span
                  ><svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.6 13.8L8.45 11.65C8.26667 11.4667 8.03333 11.375 7.75 11.375C7.46667 11.375 7.23333 11.4667 7.05 11.65C6.86667 11.8333 6.775 12.0667 6.775 12.35C6.775 12.6333 6.86667 12.8667 7.05 13.05L9.9 15.9C10.1 16.1 10.3333 16.2 10.6 16.2C10.8667 16.2 11.1 16.1 11.3 15.9L16.95 10.25C17.1333 10.0667 17.225 9.83333 17.225 9.55C17.225 9.26667 17.1333 9.03333 16.95 8.85C16.7667 8.66667 16.5333 8.575 16.25 8.575C15.9667 8.575 15.7333 8.66667 15.55 8.85L10.6 13.8ZM12 22C10.6167 22 9.31667 21.7373 8.1 21.212C6.88333 20.6867 5.825 19.9743 4.925 19.075C4.025 18.175 3.31267 17.1167 2.788 15.9C2.26333 14.6833 2.00067 13.3833 2 12C2 10.6167 2.26267 9.31667 2.788 8.1C3.31333 6.88333 4.02567 5.825 4.925 4.925C5.825 4.025 6.88333 3.31267 8.1 2.788C9.31667 2.26333 10.6167 2.00067 12 2C13.3833 2 14.6833 2.26267 15.9 2.788C17.1167 3.31333 18.175 4.02567 19.075 4.925C19.975 5.825 20.6877 6.88333 21.213 8.1C21.7383 9.31667 22.0007 10.6167 22 12C22 13.3833 21.7373 14.6833 21.212 15.9C20.6867 17.1167 19.9743 18.175 19.075 19.075C18.175 19.975 17.1167 20.6877 15.9 21.213C14.6833 21.7383 13.3833 22.0007 12 22Z"
                      fill="#10CB6C"
                    />
                  </svg>
                </span>
                <p class="mx-2">
                  Once you've added funds to your wallet, you're ready to start
                  using eTollCoin to pay your toll fees. Simply drive up to the
                  toll booth and inform the toll booth operator that you would
                  like to pay with eTollCoin.
                </p>
              </div>
              <div class="d-flex my-3">
                <span
                  ><svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.6 13.8L8.45 11.65C8.26667 11.4667 8.03333 11.375 7.75 11.375C7.46667 11.375 7.23333 11.4667 7.05 11.65C6.86667 11.8333 6.775 12.0667 6.775 12.35C6.775 12.6333 6.86667 12.8667 7.05 13.05L9.9 15.9C10.1 16.1 10.3333 16.2 10.6 16.2C10.8667 16.2 11.1 16.1 11.3 15.9L16.95 10.25C17.1333 10.0667 17.225 9.83333 17.225 9.55C17.225 9.26667 17.1333 9.03333 16.95 8.85C16.7667 8.66667 16.5333 8.575 16.25 8.575C15.9667 8.575 15.7333 8.66667 15.55 8.85L10.6 13.8ZM12 22C10.6167 22 9.31667 21.7373 8.1 21.212C6.88333 20.6867 5.825 19.9743 4.925 19.075C4.025 18.175 3.31267 17.1167 2.788 15.9C2.26333 14.6833 2.00067 13.3833 2 12C2 10.6167 2.26267 9.31667 2.788 8.1C3.31333 6.88333 4.02567 5.825 4.925 4.925C5.825 4.025 6.88333 3.31267 8.1 2.788C9.31667 2.26333 10.6167 2.00067 12 2C13.3833 2 14.6833 2.26267 15.9 2.788C17.1167 3.31333 18.175 4.02567 19.075 4.925C19.975 5.825 20.6877 6.88333 21.213 8.1C21.7383 9.31667 22.0007 10.6167 22 12C22 13.3833 21.7373 14.6833 21.212 15.9C20.6867 17.1167 19.9743 18.175 19.075 19.075C18.175 19.975 17.1167 20.6877 15.9 21.213C14.6833 21.7383 13.3833 22.0007 12 22Z"
                      fill="#10CB6C"
                    />
                  </svg>
                </span>
                <p class="mx-2">
                  The toll booth operator will provide you with a QR code. Open
                  the eTollCoin app on your smartphone, scan the QR code, and
                  confirm the payment amount.
                </p>
              </div>
              <div class="d-flex my-3">
                <span
                  ><svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.6 13.8L8.45 11.65C8.26667 11.4667 8.03333 11.375 7.75 11.375C7.46667 11.375 7.23333 11.4667 7.05 11.65C6.86667 11.8333 6.775 12.0667 6.775 12.35C6.775 12.6333 6.86667 12.8667 7.05 13.05L9.9 15.9C10.1 16.1 10.3333 16.2 10.6 16.2C10.8667 16.2 11.1 16.1 11.3 15.9L16.95 10.25C17.1333 10.0667 17.225 9.83333 17.225 9.55C17.225 9.26667 17.1333 9.03333 16.95 8.85C16.7667 8.66667 16.5333 8.575 16.25 8.575C15.9667 8.575 15.7333 8.66667 15.55 8.85L10.6 13.8ZM12 22C10.6167 22 9.31667 21.7373 8.1 21.212C6.88333 20.6867 5.825 19.9743 4.925 19.075C4.025 18.175 3.31267 17.1167 2.788 15.9C2.26333 14.6833 2.00067 13.3833 2 12C2 10.6167 2.26267 9.31667 2.788 8.1C3.31333 6.88333 4.02567 5.825 4.925 4.925C5.825 4.025 6.88333 3.31267 8.1 2.788C9.31667 2.26333 10.6167 2.00067 12 2C13.3833 2 14.6833 2.26267 15.9 2.788C17.1167 3.31333 18.175 4.02567 19.075 4.925C19.975 5.825 20.6877 6.88333 21.213 8.1C21.7383 9.31667 22.0007 10.6167 22 12C22 13.3833 21.7373 14.6833 21.212 15.9C20.6867 17.1167 19.9743 18.175 19.075 19.075C18.175 19.975 17.1167 20.6877 15.9 21.213C14.6833 21.7383 13.3833 22.0007 12 22Z"
                      fill="#10CB6C"
                    />
                  </svg>
                </span>
                <p class="mx-2">
                  That's it! Your toll fee will be deducted from your eTollCoin
                  wallet, and you can continue on your way without having to
                  stop and fumble for cash or credit cards.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 my-2 pt">
            <div>
              <img src="./images/RIGHT2.png" alt="" class="img-fluid" />
            </div>
          </div>
        </div>
        <!-- getting started section end -->
        <!-- best features -->
        <div class="row my-5 pb-3">
          <h3 class="fw-bold text-center">Best Features</h3>
          <p class="pa1 text-center mt-2">
            eTollCoin offers a range of features that make it a convenient
            and<br />
            secure way to pay your toll fees
          </p>
          <p class="pa1 text-center"></p>
          <div class="col-md-4 my-5">
            <div class="my-2">
              <img src="./images/clock.png" alt="" width="80px" />
            </div>
            <h2 class="fw-bolder">Fast and Convenient</h2>
            <p class="pa1 my-3">
              With eTollCoin, you can pay your toll fees quickly and easily
              without having to stop and fumble for cash or credit cards. Simply
              use the eTollCoin mobile app to scan a QR code and confirm your
              payment.
            </p>
          </div>
          <div class="col-md-4 my-5">
            <div class="my-2">
              <img src="./images/secure.png" alt="" width="60px" />
            </div>
            <h2 class="fw-bolder">Secure</h2>
            <p class="pa1 my-3">
              eTollCoin uses advanced encryption and security protocols to
              protect your transactions and personal information, ensuring that
              your payments are always safe and secure.
            </p>
          </div>
          <div class="col-md-4 my-5">
            <div class="my-2">
              <img src="./images/hand.png" alt="" width="80px" />
            </div>
            <h2 class="fw-bolder">Low Transaction Fees</h2>
            <p class="pa1 my-3">
              eTollCoin offers low transaction fees, making it an affordable
              option for toll payments.
            </p>
          </div>
          <div class="col-md-4 my-5">
            <div class="my-2">
              <img src="./images/f.png" alt="" width="47px" />
            </div>
            <h2 class="fw-bolder">Wide Acceptance</h2>
            <p class="pa1 my-3">
              eTollCoin is accepted at a growing number of toll booths around
              the world, giving you more options and flexibility when it comes
              to paying your toll fees.
            </p>
          </div>
          <div class="col-md-4 my-5">
            <div class="my-2">
              <img src="./images/t.png" alt="" width="80px" />
            </div>
            <h2 class="fw-bolder">Instant Transactions</h2>
            <p class="pa1 my-3">
              eTollCoin transactions are processed instantly, meaning you won't
              have to wait for your payment to be approved or processed.
            </p>
          </div>
          <div class="col-md-4 my-5">
            <div class="my-2">
              <img src="./images/m.png" alt="" width="50px" />
            </div>
            <h2 class="fw-bolder">Mobile App</h2>
            <p class="pa1 my-3">
              eTollCoin offers a mobile app that allows you to manage your
              wallet, view transaction history, and make payments on the go.
            </p>
          </div>
        </div>
        <!-- best features end -->

        <!-- our team section -->
        <div class="row my-5 pb-4">
          <h3 class="fw-bold text-center">Our Teams</h3>
          <p class="pa1 text-center mt-2">
            eTollCoin is comprised of highly skilled professionals with
            extensive experience in <br />
            the finance and technology industries.
          </p>
          <!-- card1 -->
          <div class="col-md-4 my-5 px-5">
            <div class="my-2">
              <img
                class="avatarImg"
                src="./images/av1.png"
                alt=""
                width="108px"
              />
            </div>
            <h2>Adin Barker</h2>
            <small class="pa2">Managing Director</small>

            <p class="pa1 my-3">
              We are fortunate to have a talented team of individuals who are
              committed to delivering high-quality work and achieving
              outstanding results.
            </p>
            <div class="my-4">
              <a class="mx-2" href=""
                ><img src="./images/twiter.png" alt="" width="30px"
              /></a>
              <a class="mx-2" href=""
                ><img src="./images/linkedin.png" width="30px" alt=""
              /></a>
            </div>
          </div>
          <!-- card2 -->
          <div class="col-md-4 my-5 px-5">
            <div class="my-2">
              <img
                class="avatarImg"
                src="./images/av2.png"
                alt=""
                width="108px"
              />
            </div>
            <h2>Adin Barker</h2>
            <small class="pa2">Head of Technology</small>

            <p class="pa1 my-3">
              Technology is constantly evolving, and it is our responsibility to
              stay ahead of the curve. We must continuously improve our
              processes and leverage the latest technologies to deliver
              innovative solutions to our clients.
            </p>
            <div class="my-4">
              <a class="mx-2" href=""
                ><img src="./images/twiter.png" width="30px" alt=""
              /></a>
              <a class="mx-2" href=""
                ><img src="./images/linkedin.png" width="30px" alt=""
              /></a>
            </div>
          </div>
          <!-- card3 -->
          <div class="col-md-4 my-5 px-5">
            <div class="my-2">
              <img
                class="avatarImg"
                src="./images/av3.png"
                alt=""
                width="108px"
              />
            </div>
            <h2>Hailey Moore</h2>
            <small class="pa2">Product Manager</small>

            <p class="pa1 my-3">
              To achieve this, we must work closely with all stakeholders
              including customers, sales, marketing, and engineering teams.
            </p>
            <div class="my-4">
              <a class="mx-2" href=""
                ><img src="./images/twiter.png" width="30px" alt=""
              /></a>
              <a class="mx-2" href=""
                ><img src="./images/linkedin.png" width="30px" alt=""
              /></a>
            </div>
          </div>
        </div>
        <!-- our team section end -->
        <!-- platform section -->
        <div class="row my-5 pb-5">
          <div class="col-md-6 d-flex justify-content-start">
            <div>
              <img
                class="img-fluid"
                src="./images/2mobiles.png"
                alt=""
                width="100%"
              />
            </div>
          </div>
          <div class="col-md-6 pt-5 mt-5 d-flex justify-content-end" style="">
            <div>
              <h2 class="mt-5 t2">
                Trusted platform <br />
                anytime & anywhere
              </h2>
              <p class="my-3 pa1">
                The eTollCoin mobile app adapts the full <br />
                functionality of the eTollCoin platform for seamless <br />
                ‘on-the-go’ trading.
              </p>
              <div class="buttons my-3">
                <button class="store btn mx-2 my-1">
                  <div class="d-flex">
                    <span class="mx-1 my-auto">
                      <svg
                        width="27"
                        height="33"
                        viewBox="0 0 27 33"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M21.915 17.9438C21.9464 15.4643 23.2555 13.1182 25.3321 11.8195C24.022 9.91631 21.8278 8.70961 19.5449 8.63696C17.11 8.37697 14.7494 10.1191 13.5087 10.1191C12.2439 10.1191 10.3335 8.66277 8.27634 8.70582C5.59492 8.79395 3.09517 10.3447 1.79061 12.7294C-1.01369 17.6683 1.07806 24.9269 3.76435 28.9191C5.10835 30.874 6.67911 33.0577 8.73441 32.9803C10.7456 32.8954 11.4968 31.6757 13.9245 31.6757C16.3297 31.6757 17.0345 32.9803 19.1315 32.931C21.2896 32.8954 22.6494 30.9675 23.9462 28.9941C24.9119 27.6011 25.655 26.0616 26.1479 24.4326C23.6117 23.3414 21.918 20.745 21.915 17.9438Z"
                          fill="white"
                        />
                        <path
                          d="M17.9541 6.01146C19.1308 4.5745 19.7106 2.72754 19.5702 0.862793C17.7724 1.05487 16.1118 1.92889 14.9192 3.31072C13.753 4.66083 13.1461 6.4753 13.2608 8.26877C15.0592 8.2876 16.8272 7.43727 17.9541 6.01146Z"
                          fill="white"
                        />
                      </svg>
                    </span>
                    <div>
                      <p class="a1">download on the app store</p>
                      <h3 class="he1">App Store</h3>
                    </div>
                  </div>
                </button>
                <button class="store btn mx-2">
                  <div class="d-flex">
                    <span class="mx-1 my-auto">
                      <svg
                        width="34"
                        height="39"
                        viewBox="0 0 34 39"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M16.0744 18.6492L0.61731 35.3168C0.61789 35.3202 0.619052 35.3231 0.619632 35.3266C1.09366 37.1363 2.72075 38.469 4.65186 38.469C5.42381 38.469 6.14857 38.257 6.77011 37.8847L6.81947 37.8554L24.2185 27.6554L16.0744 18.6492"
                          fill="#EA4335"
                        />
                        <path
                          d="M31.7125 15.8112L31.6977 15.8009L24.1861 11.3769L15.7234 19.0274L24.2156 27.6538L31.6875 23.2738C32.9976 22.5553 33.8868 21.1523 33.8868 19.5344C33.8868 17.9281 33.0095 16.532 31.7125 15.8112"
                          fill="#FBBC04"
                        />
                        <path
                          d="M0.616735 3.68269C0.523816 4.03079 0.474976 4.39541 0.474976 4.77404V34.2262C0.474976 34.6042 0.523235 34.97 0.617315 35.3169L16.6064 19.0758L0.616735 3.68269Z"
                          fill="#4285F4"
                        />
                        <path
                          d="M16.1884 19.4998L24.189 11.374L6.80975 1.13718C6.17805 0.752799 5.4408 0.530961 4.65186 0.530961C2.72075 0.530961 1.09148 1.86598 0.61731 3.67802C0.616729 3.67979 0.61673 3.68097 0.61673 3.68259L16.1884 19.4998Z"
                          fill="#34A853"
                        />
                      </svg>
                    </span>
                    <div>
                      <p class="a1">Get it on</p>
                      <h3 class="he1">Google Play</h3>
                    </div>
                  </div>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- patform section end  -->
        <!-- faqs section -->
        <div class="row mt-5 pb-1">
          <p class="t2 text-center">Frequently Asked Questions</p>
          <p class="pa1 text-center">
            eTollCoin is comprised of highly skilled professionals with
            extensive experience in <br />the finance and technology industries.
          </p>

          <div class="my-5 col-md-6">
            <div class="my-3">
              <p1 class="p3 my-2">What is eTollCoin?</p1>
              <p class="pa1 my-3">
                eTollCoin is a digital currency that allows you to pay your toll
                fees quickly and easily without having to carry cash or credit
                cards.
              </p>
            </div>
            <div class="my-3">
              <p1 class="p3 my-2">Is eTollCoin secure?</p1>
              <p class="pa1 my-3">
                Yes, eTollCoin uses advanced encryption and security protocols
                to protect your transactions and personal information.
              </p>
            </div>
          </div>
          <div class="my-5 col-md-6">
            <div class="my-3">
              <p1 class="p3 my-2">How does eTollCoin work?</p1>
              <p class="pa1 my-3">
                To use eTollCoin, simply download the mobile app or sign up on
                the website, add funds to your wallet, and use your eTollCoin to
                pay for toll fees at participating toll booths.
              </p>
            </div>
            <div class="my-3">
              <p1 class="p3 my-2">What are the fees for using eTollCoin?</p1>
              <p class="pa1 my-3">
                eTollCoin offers low transaction fees, making it an affordable
                option for toll payments.
              </p>
            </div>
          </div>
        </div>
        <!-- faqs end -->
      </div>
      <!-- footer section -->
      <footer class="container p5">
        <div class="d-flex flex-column flex-md-row justify-content-between">
          <div class="">
            <img src="./images/logo.png" alt="" />
          </div>
          <div class="d-md-flex justify-content-between mt-md-0 mt-sm-4"  >
            <!-- facebook icon -->
            <a class="mx-3" href=""
              ><span
                ><svg
                  width="30"
                  height="30"
                  viewBox="0 0 16 16"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M8.93133 13.9981V8.53411H10.7747L11.0487 6.39478H8.93133V5.03211C8.93133 4.41478 9.10333 3.99211 9.98933 3.99211H11.112V2.08478C10.5658 2.02624 10.0167 1.99797 9.46733 2.00011C7.838 2.00011 6.71933 2.99478 6.71933 4.82078V6.39078H4.888V8.53011H6.72333V13.9981H8.93133Z"
                    fill="#7D7D7D"
                  />
                </svg> </span
            ></a>
            <!-- twitter icon -->
            <a class="mx-3" href=""
              ><span
                ><svg
                  width="30"
                  height="30"
                  viewBox="0 0 16 16"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M5.96 12.4702C6.80457 12.4755 7.64179 12.313 8.4231 11.9923C9.20441 11.6715 9.91425 11.1988 10.5115 10.6016C11.1087 10.0044 11.5814 9.29456 11.9021 8.51325C12.2229 7.73195 12.3853 6.89473 12.38 6.05016V5.75516C12.8178 5.4344 13.1967 5.04024 13.5 4.59016C13.0878 4.77045 12.6516 4.89003 12.205 4.94516C12.6785 4.66305 13.0337 4.21899 13.205 3.69515C12.7638 3.95988 12.2799 4.14597 11.775 4.24515C11.435 3.88284 10.985 3.64268 10.4947 3.56185C10.0045 3.48101 9.50122 3.564 9.06287 3.79798C8.62452 4.03196 8.27549 4.40388 8.0698 4.85619C7.86411 5.30851 7.81322 5.816 7.925 6.30016C7.02801 6.25613 6.15036 6.02367 5.34918 5.61791C4.548 5.21215 3.84127 4.6422 3.275 3.94515C2.98946 4.44074 2.90291 5.02632 3.03288 5.58332C3.16285 6.14032 3.49962 6.62712 3.975 6.94516C3.62431 6.93163 3.28173 6.83571 2.975 6.66515V6.69016C2.97188 7.20807 3.14636 7.71141 3.46935 8.11629C3.79234 8.52117 4.24434 8.80312 4.75 8.91515C4.42382 9.00288 4.08215 9.01655 3.75 8.95515C3.89639 9.39685 4.17584 9.78244 4.55002 10.059C4.9242 10.3357 5.3748 10.4897 5.84 10.5002C5.04461 11.1404 4.05605 11.4928 3.035 11.5002C2.85598 11.495 2.67737 11.48 2.5 11.4552C3.53348 12.1136 4.7346 12.4608 5.96 12.4552"
                    fill="#7D7D7D"
                  />
                </svg> </span
            ></a>
            <!-- instagaram icon -->
            <a class="mx-3" href=""
              ><span
                ><svg
                  width="30"
                  height="30"
                  viewBox="0 0 16 16"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M13.9647 5.53664C13.9579 5.03172 13.8634 4.53182 13.6853 4.0593C13.5309 3.66074 13.295 3.29877 12.9928 2.99653C12.6905 2.69428 12.3286 2.45841 11.93 2.30397C11.4635 2.12888 10.9708 2.0342 10.4727 2.02397C9.83132 1.9953 9.62799 1.9873 7.99999 1.9873C6.37199 1.9873 6.16332 1.9873 5.52665 2.02397C5.02876 2.03427 4.53622 2.12895 4.06999 2.30397C3.67136 2.4583 3.30933 2.69413 3.00707 2.99639C2.70482 3.29865 2.46898 3.66068 2.31465 4.0593C2.13921 4.52539 2.04473 5.01805 2.03532 5.51597C2.00665 6.15797 1.99799 6.36131 1.99799 7.98931C1.99799 9.6173 1.99799 9.8253 2.03532 10.4626C2.04532 10.9613 2.13932 11.4533 2.31465 11.9206C2.46924 12.3191 2.70525 12.681 3.00761 12.9832C3.30997 13.2853 3.67203 13.521 4.07065 13.6753C4.53561 13.8574 5.02823 13.9589 5.52732 13.9753C6.16932 14.004 6.37265 14.0126 8.00065 14.0126C9.62865 14.0126 9.83732 14.0126 10.474 13.9753C10.9721 13.9655 11.4649 13.871 11.9313 13.696C12.3298 13.5414 12.6917 13.3054 12.9939 13.0032C13.2961 12.701 13.532 12.3391 13.6867 11.9406C13.862 11.474 13.956 10.982 13.966 10.4826C13.9947 9.8413 14.0033 9.63797 14.0033 8.00931C14.002 6.3813 14.002 6.17464 13.9647 5.53664ZM7.99599 11.068C6.29332 11.068 4.91399 9.68864 4.91399 7.98597C4.91399 6.28331 6.29332 4.90397 7.99599 4.90397C8.81338 4.90397 9.5973 5.22868 10.1753 5.80667C10.7533 6.38466 11.078 7.16857 11.078 7.98597C11.078 8.80337 10.7533 9.58729 10.1753 10.1653C9.5973 10.7433 8.81338 11.068 7.99599 11.068ZM11.2007 5.50864C11.1063 5.50873 11.0128 5.4902 10.9255 5.45411C10.8383 5.41803 10.759 5.36509 10.6923 5.29834C10.6255 5.23159 10.5726 5.15233 10.5365 5.0651C10.5004 4.97786 10.4819 4.88437 10.482 4.78997C10.482 4.69564 10.5006 4.60223 10.5367 4.51508C10.5728 4.42793 10.6257 4.34874 10.6924 4.28203C10.7591 4.21533 10.8383 4.16242 10.9254 4.12632C11.0126 4.09022 11.106 4.07164 11.2003 4.07164C11.2947 4.07164 11.3881 4.09022 11.4752 4.12632C11.5624 4.16242 11.6416 4.21533 11.7083 4.28203C11.775 4.34874 11.8279 4.42793 11.864 4.51508C11.9001 4.60223 11.9187 4.69564 11.9187 4.78997C11.9187 5.1873 11.5973 5.50864 11.2007 5.50864Z"
                    fill="#7D7D7D"
                  />
                  <path
                    d="M7.99599 9.98789C9.10166 9.98789 9.99799 9.09156 9.99799 7.98589C9.99799 6.88021 9.10166 5.98389 7.99599 5.98389C6.89031 5.98389 5.99399 6.88021 5.99399 7.98589C5.99399 9.09156 6.89031 9.98789 7.99599 9.98789Z"
                    fill="#7D7D7D"
                  />
                </svg> </span
            ></a>
            <!-- lmkdin icon -->
            <a class="mx-3" href=""
              ><span
                ><svg
                  width="30"
                  height="30"
                  viewBox="0 0 16 16"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M3.32201 4.79795C4.12761 4.79795 4.78068 4.14488 4.78068 3.33928C4.78068 2.53368 4.12761 1.88062 3.32201 1.88062C2.51641 1.88062 1.86334 2.53368 1.86334 3.33928C1.86334 4.14488 2.51641 4.79795 3.32201 4.79795Z"
                    fill="#7D7D7D"
                  />
                  <path
                    d="M6.15799 5.90312V13.9958H8.67066V9.99379C8.67066 8.93779 8.86932 7.91512 10.1787 7.91512C11.47 7.91512 11.486 9.12246 11.486 10.0605V13.9965H14V9.55846C14 7.37846 13.5307 5.70312 10.9827 5.70312C9.75932 5.70312 8.93932 6.37446 8.60399 7.00979H8.56999V5.90312H6.15799ZM2.06332 5.90312H4.57999V13.9958H2.06332V5.90312Z"
                    fill="#7D7D7D"
                  />
                </svg> </span
            ></a>
          </div>
        </div>
        <div class="row my-3">
          <div class="col-md-3  my-2">
            <p class="pa1">
              eTollCoin is a digital currency that allows you to pay your toll
              fees quickly and easily without having to carry cash or credit
              cards.
            </p>
          </div>
          <div class="col-md-4 col-lg-3 my-2 d-md-flex justify-content-center">
            <div>
              <p class="p3">Services</p>
              <div>
                <a class="alink" href=""> <p class="pa1 my-3">About</p></a>
                <a class="alink" href=""> <p class="pa1 my-3">Team</p></a>
                <a class="alink" href=""> <p class="pa1 my-3">Buy Coins</p></a>
                <a class="alink" href=""> <p class="pa1 my-3">FAQs</p></a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-3 my-2">
            <p class="p3">WHITEPAPERS</p>
            <div>
              <a class="alink" href="">
                <p class="pa1 my-3">Download our Whitepaper</p></a
              >
              <a class="d-flex nav-link" href=""
                ><span class="mx-2 mt-2"
                  ><img src="./images/pdfbox.png" width="30px" alt=""
                /></span>
                <p class="pa1 my-3 text-white">Download - English</p></a
              >

              <a class="d-flex nav-link" href=""
                ><span class="mx-2 mt-2"
                  ><img src="./images/pdfbox.png" width="30px" alt=""
                /></span>
                <p class="pa1 my-3 text-white">Download - Spanish</p></a
              >
            </div>
          </div>
          <div class="col-md-4 col-lg-3 my-2">
            <p class="p3">CONTACT US</p>
            <div>
              <div class="d-flex my-2">
                <span class="me-2"
                  ><img src="./images/ic_round-email.png" width="20px" alt=""
                /></span>
                <p class="pa1">info@etollcoin.com.au</p>
              </div>
              <div class="d-flex my-2">
                <span class="me-2"
                  ><img src="./images/bx_bxs-phone.png" width="20px" alt=""
                /></span>
                <p class="pa1">+61 1300 88 53 67</p>
              </div>
              <div class="d-flex my-2">
                <span class="me-2"
                  ><img
                    src="./images/material-symbols_location-on.png"
                    width="20px"
                    alt=""
                /></span>
                <p class="pa1">
                  Level 1, 5 George St, North Strathfield NSW 2137
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="my-4 d-lg-flex justify-content-lg-between">
          <div>
            <p class="pa1">
              © Copyright 2023 | eTollCoin | All Rights Reserved
            </p>
          </div>
          <div>
            <p class="pa1">Disclaimer | Privacy Policy | Terms & Conditions</p>
          </div>
        </div>
      </footer>
      <!-- footer end -->
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
