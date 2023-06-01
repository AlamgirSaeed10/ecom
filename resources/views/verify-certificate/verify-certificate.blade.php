@extends('include.master')
@section('content')
  <style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans|Pinyon+Script|Rochester|Rosarivo|Tangerine');

.cursive {
  font-family: 'Pinyon Script', cursive;
}

.cursive-2 {
  font-family: 'Tangerine', cursive;
  dispaly: inline-block;
  padding-right: 18px;
  font-size: 38px;
  font-weight: 400;
}

.sans {
  font-family: 'Open Sans', sans-serif;
}

.bold {
  font-weight: bold;
}

.medium {
  font-size: 23px !important;
}

.large {
  font-size: 28px !important;
}

.block {
  display: block;
}

.underline {
  border-bottom: 1px solid #777;
  padding: 5px;
  margin-bottom: 15px;
}

.margin-0 {
  margin: 0;
}

.padding-0 {
  padding: 0;
}

.pm-empty-space {
  height: 40px;
  width: 100%;
}

body {
  padding: 20px 0;
  background: #ccc;
}

.pm-certificate-container {
  position: relative;
  width: 800px;
  height: 650px;
  background: 0 0 transparent no-repeat url(http://dxlfb468n8ekd.cloudfront.net/gsc/8QODAF/83/4a/42/834a42d38b9a4adb8d864bd5af19e9df/images/create_certificate/u132.png?token=77b4223a5ba208c72394c5cdafcb6d8c);
  background-size: 800px 650px;
  background-color: #fff;
  padding: 0;
  color: #333;
  font-family: 'Open Sans', sans-serif;
  box-shadow: 0 0 5px rgba(0, 0, 0, .5);

  .pm-certificate-border {
    position: relative;
    width: 656px;
    height: 506px;
    padding: 0;
    background-color: #fff;
    background-image: none;
    left: 50%;
    margin-left: -328px;
    top: 50%;
    margin-top: -253px;

    .pm-certificate-block {
      width: 650px;
      height: 200px;
      position: relative;
      left: 50%;
      margin-left: -325px;
      top: 0;
      margin-top: 0;
    }

    .pm-certificate-header {
      margin-bottom: 10px;
    }

    .pm-certificate-title {
      position: relative;
      top: 20px;

      h2 {
        margin: 15px 0;
        font-family: 'Rosarivo', serif;
        font-size: 36px !important;
      }
    }

    .pm-certificate-body {
      padding: 0;

      .pm-certificate-watermark-full {
        width: 500px;
        height: 500px;
        position: absolute;
        left: 50%;
        margin-left: -250px;
        top: 50%;
        margin-top: -250px;
        opacity: .15;
        background: 0 0 transparent no-repeat url("http://www.chrisbrosky.com/images/harry-dunne-badge.png");
        background-size: 500px 500px;

        &.disable {
          display: none;
        }
      }

      .pm-certificate-text {
        text-transform: uppercase;
        margin: 15px 0;
      }

      .pm-name-text {
        font-size: 20px;
      }
    }

    .pm-earned {
      margin: 5px 0 36px;
      .pm-earned-text {
        font-size: 20px;
      }
      .pm-credits-text {
        font-size: 15px;
      }
    }

    .pm-course-title {
      .pm-earned-text {
        font-size: 20px;
      }
      .pm-credits-text {
        font-size: 15px;
      }
    }

    .pm-certified {
      font-size: 12px;

      .underline {
        margin-bottom: 5px;
      }
    }

    .pm-certificate-footer {
      width: 650px;
      height: 100px;
      position: relative;
      left: 50%;
      margin-left: -325px;
      bottom: 0;

      .pm-certificate-badge {
        height: 140px;
        width: 140px;
        position: relative;
        top: -10px;
      }
    }
  }
}

  </style>
</head>
<body>
    <div class="container pm-certificate-container">
      <div class="pm-certificate-border col-xs-12">
        <div class="row pm-certificate-header">

        </div>

        <div class="row pm-certificate-body">
          <!-- Watermark - add class 'disable' to turn off -->
          <div class="pm-certificate-watermark-full"></div>
          <!-- END Watermark -->
          <div class="pm-certificate-block">
            <div class="col-xs-12">
              <div class="pm-certificate-title cursive col-xs-12 text-center">
                <h2>CERTIFICATE <span class="cursive-2">of</span>COMPLETION</h2>
              </div>
            </div>
            <div class="col-xs-12">
              <div class="row">
                <div class="col-xs-2">
                  <!-- LEAVE EMPTY -->
                </div>
                <div class="pm-certificate-name margin-0 col-xs-8 text-center">
                  <div class="pm-certificate-text">This Certifies That</div>
                  <span class="pm-name-text bold large">Lloyd Christmas</span>
                </div>
                <div class="col-xs-2">
                  <!-- LEAVE EMPTY -->
                </div>
              </div>
            </div>

            <div class="col-xs-12">
              <div class="row">
                <div class="col-xs-2">
                  <!-- LEAVE EMPTY -->
                </div>
                <div class="pm-earned col-xs-8 text-center">
                  <span class="pm-certificate-text padding-0 block">Has successfully completed 20.0 hours of the following professional development course:</span>
                  <span class="pm-name-text bold medium">How to Grow Worms</span>
                </div>
                <div class="col-xs-2">
                  <!-- LEAVE EMPTY -->
                </div>
                <div class="col-xs-12"></div>
              </div>
            </div>

            <div class="col-xs-12">
              <div class="row">
                <div class="col-xs-2">
                  <!-- LEAVE EMPTY -->
                </div>
                <div class="pm-course-title col-xs-8 text-center">
                  <span class="pm-certificate-text block bold">Presented By:</span>
                </div>
                <div class="col-xs-2">
                  <!-- LEAVE EMPTY -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12">
            <div class="row">
              <div class="pm-certificate-footer">
                <div class="col-xs-3">
                  <!-- LEAVE EMPTY -->
                </div>
                <div class="col-xs-3 pm-certified col-xs-4 text-center">
                  <span class="pm-credits-text block sans bold">Signed:</span>
                  <span class="pm-empty-space block underline"></span>
                  <span class="bold block">Harry S. Dunne Earthworm Expert</span>
                </div>
                <div class="col-xs-3 pm-certified col-xs-4 text-center">
                  <span class="pm-credits-text block sans bold">Date:</span>
                  <span class="pm-empty-space block underline"></span>
                </div>
                <div class="col-xs-3 pm-certified col-xs-4 text-center">
                  <span class="pm-certificate-badge block">
                      <img src="http://www.chrisbrosky.com/images/harry-dunne-badge.png" height="140" width="140"/>
                    </span>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </body>
@endsection
