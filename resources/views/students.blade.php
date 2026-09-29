
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VP College - Student Registration</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f2f5f9;
            padding: 30px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }

        .header {
            background: #123b6d;
            color: white;
            padding: 25px;
            text-align: center;
            border-radius: 12px 12px 0 0;
        }

        .header h1 {
            font-size: 30px;
            margin-bottom: 8px;
        }

        .header p {
            font-size: 15px;
        }

        .form-box {
            background: white;
            padding: 30px;
            border-radius: 0 0 12px 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.10);
        }

        .section-title {
            color: #123b6d;
            font-size: 20px;
            margin-bottom: 20px;
            border-bottom: 2px solid #123b6d;
            padding-bottom: 8px;
        }

        .row {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 18px;
        }

        .field {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 7px;
            color: #333;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 7px;
            font-size: 15px;
            outline: none;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #123b6d;
        }

        textarea {
            resize: vertical;
            min-height: 90px;
        }

        .full {
            grid-column: 1 / -1;
        }

        .button-area {
            text-align: center;
            margin-top: 25px;
        }

        button {
            background: #123b6d;
            color: white;
            border: none;
            padding: 13px 40px;
            font-size: 16px;
            border-radius: 7px;
            cursor: pointer;
        }

        button:hover {
            background: #0d2b50;
        }

        .success {
            background: #d4edda;
            color: #155724;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 6px;
        }

        .error {
            background: #f8d7da;
            color: #721c24;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 6px;
        }

        .error ul {
            margin-left: 20px;
        }

        @media(max-width: 700px) {
            body {
                padding: 10px;
            }

            .row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <h1>VP College</h1>
        <p>Student Registration Form</p>
    </div>

    <div class="form-box">

        @if(session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="error">
                <strong>Please correct the following errors:</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h2 class="section-title">Student Registration</h2>

        <form action="{{ url('/students') }}" method="POST">

            @csrf

            <div class="row">

                <div class="field">
                    <label>Student Name</label>
                    <input
                        type="text"
                        name="name"
                        placeholder="Enter student name"
                        value="{{ old('name') }}"
                        required>
                </div>

                <div class="field">
                    <label>Email Address</label>
                    <input
                        type="email"
                        name="email"
                        placeholder="Enter email"
                        value="{{ old('email') }}"
                        required>
                </div>

                <div class="field">
                    <label>Mobile Number</label>
                    <input
                        type="text"
                        name="mobile"
                        placeholder="Enter mobile number"
                        maxlength="10">
                </div>

                <div class="field">
                    <label>Date of Birth</label>
                    <input
                        type="date"
                        name="dob">
                </div>

                <div class="field">
                    <label>Gender</label>
                    <select name="gender">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="field">
                    <label>Course</label>
                    <select name="course" required>
                        <option value="">Select Course</option>
                        <option value="BCS">BCS</option>
                        <option value="BCA">BCA</option>
                        <option value="BBA">BBA</option>
                        <option value="B.Com">B.Com</option>
                        <option value="BA">BA</option>
                        <option value="B.Sc">B.Sc</option>
                        <option value="MCA">MCA</option>
                        <option value="M.Com">M.Com</option>
                    </select>
                </div>

                <div class="field full">
                    <label>Address</label>
                    <textarea
                        name="address"
                        placeholder="Enter complete address"></textarea>
                </div>

                <div class="field">
                    <label>City</label>
                    <input
                        type="text"
                        name="city"
                        placeholder="Enter city">
                </div>

                <div class="field">
                    <label>State</label>
                    <input
                        type="text"
                        name="state"
                        value="Maharashtra"
                        placeholder="Enter state">
                </div>

                <div class="field">
                    <label>Pincode</label>
                    <input
                        type="text"
                        name="pincode"
                        placeholder="Enter pincode"
                        maxlength="6">
                </div>

            </div>

            <div class="button-area">
                <button type="submit">
                    Register Student
                </button>
            </div>

        </form>

    </div>

</div>

</body>
</html>

