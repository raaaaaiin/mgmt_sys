<head>
    <link rel="stylesheet" href="PreRequisites/bootstrap-4.6.0-dist/css/bootstrap.css">
    <script type="application/javascript" src="PreRequisites/FontAwesome.js"></script>
    <script type="application/javascript" src="PreRequisites/jQuery_v3.6.0.js"></script>

    <style>
        body{
            background-color:#f9fafe !important;
        }
        .formdes-mb-5 {
            margin-bottom: 20px;
        }
        .formdes-pt-3 {
            padding-top: 12px;
        }
        .formdes-main-wrapper {
            height:100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 28px;
            background-color:#f3f6fd;
            border-radius:15px;
        }

        .formdes-form-wrapper {
            margin: 0 auto;
            max-width: 550px;
            width: 100%;
        }
        .formdes-form-label {
            display: block;
            font-weight: 500;
            font-size: 16px;
            color: #07074d;
            margin-bottom: 12px;
        }
        .formdes-form-label-2 {
            font-weight: 600;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .formdes-form-input {
            width: 100%;
            padding: 12px 24px;
            border-radius: 6px;
            border: 1px solid #e0e0e0;
            background: white;
            font-weight: 500;
            font-size: 16px;
            color: #6b7280;
            outline: none;
            resize: none;
        }
        .formdes-form-input:focus {
            border-color: #3166e1;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .formdes-btn {
            text-align: center;
            font-size: 16px;
            border-radius: 6px;
            padding: 14px 32px;
            border: none;
            font-weight: 600;
            background-color: #3166e1;
            color: white;
            cursor: pointer;
        }
        .formdes-btn:hover {
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .formdes--mx-3 {
            margin-left: -12px;
            margin-right: -12px;
        }
        .formdes-px-3 {
            padding-left: 12px;
            padding-right: 12px;
        }
        .flex {
            display: flex;
        }
        .flex-wrap {
            flex-wrap: wrap;
        }
        .w-full {
            width: 100%;
        }

        .formdes-file-input input {
            opacity: 0;
            position: absolute;
        }

        .formdes-file-input label {
            height:75%;
            position: relative;
            border: 3px dashed #c9d4e6;
            border-radius: 6px;
            min-height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px;
            text-align: center;
            background-color:#e7effc;
        }
        .formdes-drop-file {
            display: block;
            font-weight: 600;
            color: #07074d;
            font-size: 20px;
            margin-bottom: 8px;
        }

        .formdes-or {
            font-weight: 500;
            font-size: 16px;
            color: #6b7280;
            display: block;
            margin-bottom: 8px;
        }
        .formdes-browse {
            font-weight: 500;
            font-size: 16px;
            color: #07074d;
            display: inline-block;
            padding: 8px 28px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
        }

        .formdes-file-list {
            border-radius: 6px;
            background: #f5f7fb;
            padding: 16px 32px;
        }

        .formdes-file-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .formdes-file-item button {
            color: #07074d;
            border: none;
            background: transparent;
            cursor: pointer;
        }

        .formdes-file-name {
            font-weight: 500;
            font-size: 16px;
            color: #07074d;
            padding-right: 12px;
        }
        .formdes-progress-bar {
            margin-top: 20px;
            position: relative;
            width: 100%;
            height: 6px;
            border-radius: 8px;
            background: #e2e5ef;
        }

        .formdes-progress {
            position: absolute;
            width: 75%;
            height: 100%;
            left: 0;
            top: 0;
            background: #6a64f1;
            border-radius: 8px;
        }

        @media (min-width: 540px) {
            .sm\:w-half {
                width: 50%;
            }
        }















        /* second style */
        .formbold-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 28px;
            background-color:#f3f6fd;
            border-radius:15px;
        }

        .formbold-form-wrapper {
            margin: 0 auto;
            max-width: 550px;
            width: 100%;
        }
        .formbold-steps {
            padding-bottom: 18px;
            margin-bottom: 35px;
            border-bottom: 1px solid #DDE3EC;
        }
        .formbold-steps ul {
            padding: 0;
            margin: 0;
            list-style: none;
            display: flex;
            gap: 40px;
        }
        .formbold-steps li {
            display: flex;
            align-items: center;
            gap: 14px;
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            color: #536387;
        }
        .formbold-steps li span {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #DDE3EC;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            color: #536387;
        }
        .formbold-steps li.active {
            color: #07074D;;
        }
        .formbold-steps li.active span {
            background: #6A64F1;
            color: #FFFFFF;
        }

        .formbold-input-flex {
            display: flex;
            gap: 20px;
            margin-bottom: 22px;
        }
        .formbold-input-flex > div {
            width: 50%;
        }
        .formbold-form-input {
            width: 100%;
            padding: 13px 22px;
            border-radius: 5px;
            border: 1px solid #DDE3EC;
            background: #FFFFFF;
            font-weight: 500;
            font-size: 16px;
            color: #536387;
            outline: none;
            resize: none;
        }
        .formbold-form-input:focus {
            border-color: #6a64f1;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }
        .formbold-form-label {
            color: #07074D;
            font-weight: 500;
            font-size: 14px;
            line-height: 24px;
            display: block;
            margin-bottom: 10px;
        }

        .formbold-form-confirm {
            border-bottom: 1px solid #DDE3EC;
            padding-bottom: 35px;
        }
        .formbold-form-confirm p {
            font-size: 16px;
            line-height: 24px;
            color: #536387;
            margin-bottom: 22px;
            width: 75%;
        }
        .formbold-form-confirm > div {
            display: flex;
            gap: 15px;
        }

        .formbold-confirm-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            background: #FFFFFF;
            border: 0.5px solid #DDE3EC;
            border-radius: 5px;
            font-size: 16px;
            line-height: 24px;
            color: #536387;
            cursor: pointer;
            padding: 10px 20px;
            transition: all .3s ease-in-out;
        }
        .formbold-confirm-btn {
            box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.12);
        }
        .formbold-confirm-btn.active {
            background: #6A64F1;
            color: #FFFFFF;
        }

        .formbold-form-step-1,
        .formbold-form-step-2,
        .formbold-form-step-3 {
            display: none;
        }
        .formbold-form-step-1.active,
        .formbold-form-step-2.active,
        .formbold-form-step-3.active {
            display: block;
        }

        .formbold-form-btn-wrapper {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 25px;
            margin-top: 25px;
        }
        .formbold-back-btn {
            cursor: pointer;
            background: #FFFFFF;
            border: none;
            color: #07074D;
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            display: none;
        }
        .formbold-back-btn.active {
            display: block;
        }
        .formbold-btn {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 16px;
            border-radius: 5px;
            padding: 10px 25px;
            border: none;
            font-weight: 500;
            background-color: #6A64F1;
            color: white;
            cursor: pointer;
        }
        .formbold-btn:hover {
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }
    </style>

</head>
<body>
<div clas="wrapper">
    <div class = "container-fluid p-4">
        <div class="row">
            <div class="col-12 ">
                <span ><h2 class="ml-4">Add Item</h2></span>
                <div class="row ">
                    <div class="col-lg-6 col-md-12">
                        <div class="formdes-main-wrapper">
                            <!-- Author: formdes Team -->
                            <!-- Learn More: https://formdes.com -->
                            <div class="formdes-form-wrapper">
                                <form action="https://formdes.com/s/FORM_ID" method="POST">


                                    <div class="mb-6 h-100">
                                        <label class="formdes-form-label formdes-form-label-2">
                                            Add Cover Image
                                        </label>

                                        <div class="formdes-mb-5 formdes-file-input">
                                            <input type="file" name="file" id="file" />
                                            <label for="file">
                                                <div>
                                                    <span class="formdes-drop-file"> Drop files here </span>
                                                    <span class="formdes-or"> Or </span>
                                                    <span class="formdes-browse"> Browse </span>
                                                </div>
                                            </label>
                                        </div>


                                    <div>
                                        <button class="formdes-btn w-full">Send File</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="formbold-main-wrapper">
                        <!-- Author: FormBold Team -->
                        <!-- Learn More: https://formbold.com -->
                        <div class="formbold-form-wrapper">
                            <form action="https://formbold.com/s/FORM_ID" method="POST">
                                <div class="formbold-steps">
                                    <ul>
                                        <li class="formbold-step-menu1 active">
                                            <span>1</span>
                                            Sign Up
                                        </li>
                                        <li class="formbold-step-menu2">
                                            <span>2</span>
                                            Message
                                        </li>
                                        <li class="formbold-step-menu3">
                                            <span>3</span>
                                            Confirm
                                        </li>
                                    </ul>
                                </div>

                                <div class="formbold-form-step-1 active">
                                    <div class="formbold-input-flex">
                                        <div>
                                            <label for="firstname" class="formbold-form-label"> First name </label>
                                            <input
                                                    type="text"
                                                    name="firstname"
                                                    placeholder="Andrio"
                                                    id="firstname"
                                                    class="formbold-form-input"
                                            />
                                        </div>
                                        <div>
                                            <label for="lastname" class="formbold-form-label"> Last name </label>
                                            <input
                                                    type="text"
                                                    name="lastname"
                                                    placeholder="Dolee"
                                                    id="lastname"
                                                    class="formbold-form-input"
                                            />
                                        </div>
                                    </div>

                                    <div class="formbold-input-flex">
                                        <div>
                                            <label for="dob" class="formbold-form-label"> Date of Birth </label>
                                            <input
                                                    type="date"
                                                    name="dob"
                                                    id="dob"
                                                    class="formbold-form-input"
                                            />
                                        </div>
                                        <div>
                                            <label for="email" class="formbold-form-label"> Email Address </label>
                                            <input
                                                    type="email"
                                                    name="email"
                                                    placeholder="example@mail.com"
                                                    id="email"
                                                    class="formbold-form-input"
                                            />
                                        </div>
                                    </div>

                                    <div>
                                        <label for="address" class="formbold-form-label"> Address </label>
                                        <input
                                                type="text"
                                                name="address"
                                                id="address"
                                                placeholder="Flat 4, 24 Castle Street, Perth, PH1 3JY"
                                                class="formbold-form-input"
                                        />
                                    </div>
                                </div>

                                <div class="formbold-form-step-2">
                                    <div>
                                        <label for="message" class="formbold-form-label"> Message </label>
                                        <textarea
                                                rows="6"
                                                name="message"
                                                id="message"
                                                placeholder="Type your message"
                                                class="formbold-form-input"
                                        ></textarea>
                                    </div>
                                </div>

                                <div class="formbold-form-step-3">
                                    <div class="formbold-form-confirm">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                        </p>

                                        <div>
                                            <button class="formbold-confirm-btn active">
                                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="11" cy="11" r="10.5" fill="white" stroke="#DDE3EC"/>
                                                    <g clip-path="url(#clip0_1667_1314)">
                                                        <path d="M9.83343 12.8509L15.1954 7.48828L16.0208 8.31311L9.83343 14.5005L6.12109 10.7882L6.94593 9.96336L9.83343 12.8509Z" fill="#536387"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1667_1314">
                                                            <rect width="14" height="14" fill="white" transform="translate(4 4)"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                Yes! I want it.
                                            </button>

                                            <button class="formbold-confirm-btn">
                                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="11" cy="11" r="10.5" fill="white" stroke="#DDE3EC"/>
                                                    <g clip-path="url(#clip0_1667_1314)">
                                                        <path d="M9.83343 12.8509L15.1954 7.48828L16.0208 8.31311L9.83343 14.5005L6.12109 10.7882L6.94593 9.96336L9.83343 12.8509Z" fill="#536387"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1667_1314">
                                                            <rect width="14" height="14" fill="white" transform="translate(4 4)"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                No! I don’t want it.
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="formbold-form-btn-wrapper">
                                    <button class="formbold-back-btn">
                                        Back
                                    </button>

                                    <button class="formbold-btn">
                                        Next Step
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1675_1807)">
                                                <path d="M10.7814 7.33312L7.20541 3.75712L8.14808 2.81445L13.3334 7.99979L8.14808 13.1851L7.20541 12.2425L10.7814 8.66645H2.66675V7.33312H10.7814Z" fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1675_1807">
                                                    <rect width="16" height="16" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const stepMenuOne = document.querySelector('.formbold-step-menu1')
    const stepMenuTwo = document.querySelector('.formbold-step-menu2')
    const stepMenuThree = document.querySelector('.formbold-step-menu3')

    const stepOne = document.querySelector('.formbold-form-step-1')
    const stepTwo = document.querySelector('.formbold-form-step-2')
    const stepThree = document.querySelector('.formbold-form-step-3')

    const formSubmitBtn = document.querySelector('.formbold-btn')
    const formBackBtn = document.querySelector('.formbold-back-btn')

    formSubmitBtn.addEventListener("click", function(event){
        event.preventDefault()
        if(stepMenuOne.className == 'formbold-step-menu1 active') {
            event.preventDefault()

            stepMenuOne.classList.remove('active')
            stepMenuTwo.classList.add('active')

            stepOne.classList.remove('active')
            stepTwo.classList.add('active')

            formBackBtn.classList.add('active')
            formBackBtn.addEventListener("click", function (event) {
                event.preventDefault()

                stepMenuOne.classList.add('active')
                stepMenuTwo.classList.remove('active')

                stepOne.classList.add('active')
                stepTwo.classList.remove('active')

                formBackBtn.classList.remove('active')

            })

        } else if(stepMenuTwo.className == 'formbold-step-menu2 active') {
            event.preventDefault()

            stepMenuTwo.classList.remove('active')
            stepMenuThree.classList.add('active')

            stepTwo.classList.remove('active')
            stepThree.classList.add('active')

            formBackBtn.classList.remove('active')
            formSubmitBtn.textContent = 'Submit'
        } else if(stepMenuThree.className == 'formbold-step-menu3 active') {
            document.querySelector('form').submit()
        }
    })



</script>

</body>
