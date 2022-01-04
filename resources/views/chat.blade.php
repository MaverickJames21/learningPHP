    @extends('base')

    @section('content')



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">




    <style>
        body,html{
        height: 100%;
        margin: 0;
        background: #7F7FD5;
        background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
        background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
        }
        .chat{
        margin-top: auto;
        margin-bottom: auto;
        }
        .card{
            height: 550px;
            border-radius: 15px !important;
            background-color: rgba(0,0,0,0.4) !important;
        }

        .msg_card_body{
            overflow-y: auto;
        }
        .card-header{
            border-radius: 15px 15px 0 0 !important;
            border-bottom: 0 !important;
        }
        .card-footer{
        border-radius: 0 0 15px 15px !important;
            border-top: 0 !important;
        }
        .container{
            align-content: center;
        }

        .type_msg{
            background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color:white !important;
            height: 60px !important;
            overflow-y: auto;
        }
            .type_msg:focus{
            box-shadow:none !important;
            outline:0px !important;
        }

        .send_btn{
        border-radius: 0 15px 15px 0 !important;
        background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color: white !important;
            cursor: pointer;
        }



        .active{
            background-color: rgba(0,0,0,0.3);
        }
        .user_img{
            height: 70px;
            width: 70px;
            border:1.5px solid #f5f6fa;
        }
        .user_img_msg{
            height: 40px;
            width: 40px;
            border:1.5px solid #f5f6fa;
        }
        .img_cont{
            position: relative;
            height: 70px;
            width: 70px;
        }
        .img_cont_msg{
            height: 40px;
            width: 40px;
        }




        #chat{
        margin-top: auto;
        margin-bottom: auto;
        margin-left: 10px;
        border-radius: 25px;
        background-color: #82ccdd;
        padding: 10px;
        position: relative;
        }
        .msg_cotainer_send{
        margin-top: auto;
        margin-bottom: auto;
        margin-right: 10px;
        border-radius: 25px;
        background-color: #78e08f;
        padding: 10px;
        position: relative;
        }
        .msg_time{
        position: absolute;
        left: 0;
        bottom: -15px;
        color: rgba(255,255,255,0.5);
        font-size: 10px;
        }
        .msg_time_send{
        position: absolute;
        right:0;
        bottom: -15px;
        color: rgba(255,255,255,0.5);
        font-size: 10px;
        }
        .msg_head{
        position: relative;
        }




        @media(max-width: 576px){
        .contacts_card{
        margin-bottom: 15px !important;
        }
        }
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }
        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #7F7FD5;
            border-radius: 10px;
        }
        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #5454b6;
        }
    </style>


     <script>

         src="{{ asset('js/app.js')}}"

    </script>


            <div class="card">
                    <div class="card-header msg_head">
                        <div class="d-flex bd-highlight"></div>
                    </div>
                <div class="card-body msg_card_body">


                    <div class="d-flex justify-content-start mb-4">
                      <div class="img_cont_msg">
                        <img src="https://therichpost.com/wp-content/uploads/2020/06/avatar2.png" class="rounded-circle user_img_msg">
                      </div>
                      <div id="chat">
                        Bye, see you
                        <span class="msg_time">9:12 AM, Today</span>
                      </div>
                    </div>
                  </div>
                <div class="card-footer">
                    <div class="input-group">

                      <textarea type="text" id="message" class="form-control type_msg" placeholder="Type your message..."></textarea>
                      <textarea type="text" id="nickname" class="form-control type_msg" placeholder="Type your Pseudo..."></textarea>
                      <button id="submitButton"
                      class="flex items-center justify-center h-10 w-10 mr-2 rounded-full bg-gray-200 hover:bg-gray-300 text-indigo-800 text-dark focus:outline-none">
                        <svg
                        class="w-5 h-5 transform rotate-90 -mr-px"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"
                        ></path>
                      </svg>
                      </button>
                    </div>
                </div>
            </div>


    @stop
</body>
</html>
