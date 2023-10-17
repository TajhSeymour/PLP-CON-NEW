<div class="form-container2">
    <form id="code-verification-form" class="form2">
        <h3>Verify Department Code</h3>
        <input type="text" id="verification-code" placeholder="Enter Code" required>
        <button type="button" id="verify-code"
            class="button-caption button button-solid-light transition-el transition-el-5">Verify Code</button>
    </form>
</div>
<div class="container-fluid">
  ...

<div class="form-container-local">
    <h3>Registration Form</h3>
    
        <form id="notify-form" class="form2" style="display: none;">
            <div class="row">
                <div class="col-md-6">

                    <label for="first_name">First Name *</label>
                    <input type="text" id="input_first_name" required><br>
                </div>

                <div class="col-md-6">
                    <label for="input_middle_name">Middle Name</label>
                    <input type="text" id="input_middle_name"><br>
                </div>
                <div class="col-md-6">
                    <label for="last_name">Last Name *</label>
                    <input type="text" id="input_last_name" required><br>
                </div>
                <div class="col-md-6">
                    <label for="gender">Gender *</label>
                    <select id="input_gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select><br>
                </div>
                <div class="col-md-6">
                    <label for="dob">Date of Birth *</label>
                    <input type="date" id="input_dob" required><br>

                </div>


                <label for="input_department">Your Department</label>
                <input type="text" id="input_department" placeholder="Department" disabled><br>

                <label for="input_assignment">Conference Assignment *</label>
                <select id="input_assignment" required>
                    <option value="" disabled selected>Assignment *</option>
                </select><br>

                <label for="input_job_title">Job Title</label>
                <input type="text" id="input_job_title"><br>

                <h3>Upload Badge Photo - White Background (png or jpg)</h3>
                <input type="file" accept=".jpg, .jpeg, .png" id="badge_photo" required><br>

                <h3>Upload Gov-ID</h3>
                <input type="file" accept=".jpg, .jpeg, .png" id="gov_id" required><br>

                <button type="submit" id="submit" class="button-caption button button-solid-light">Submit</button>
        </form>
    </div>

    </div>
<script>
    class MultiStepForm {
        constructor() {
            this.verificationForm = document.getElementById('code-verification-form');
            this.registrationForm = document.getElementById('notify-form');
            this.verifyCodeButton = document.getElementById('verify-code');
            this.codeInput = document.getElementById('verification-code');

            this.verifyCodeButton.addEventListener('click', () => this.verifyCode());
        }

        verifyCode() {
            const enteredCode = this.codeInput.value;

            // Simulate code verification (replace with your validation logic)
            const isCodeValid = enteredCode === "test123"; // Replace with your actual validation

            if (isCodeValid) {
                this.verificationForm.style.display = 'none';
                this.registrationForm.style.display = 'block';
            } else {
                alert('Invalid code. Please try again.');
            }
        }
    }

    const form = new MultiStepForm();
</script>
<style>
    .form-container2 {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(255, 255, 255, 0.8);
    }

    .form2 {
        max-width: 400px;
        text-align: center;
        padding: 20px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .form2 input {
        border: 2px solid black;
        /* Add black border to input fields */
        padding: 8px;
        margin-bottom: 10px;
    }


    .form-container-local {
        width: 100%;
        padding: 20px;
        /* Add some padding for spacing */
        box-sizing: border-box;
        /* Make sure padding doesn't affect the total width */
        text-align: center;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .registration-container {
        max-width: 400px;
        margin: 0 auto;
        /* Center the container horizontally */
    }
</style>