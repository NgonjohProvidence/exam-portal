<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <style>
        :root {
            --primary-blue: #1a73e8;
            --light-blue: #e8f0fe;
            --white: #ffffff;
            --dark-blue: #0d47a1;
            --gray: #f5f5f5;
            --dark-gray: #757575;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--gray);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            padding: 30px;
        }
        
        h1 {
            color: var(--primary-blue);
            text-align: center;
            margin-bottom: 30px;
            font-weight: 500;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: var(--dark-gray);
            font-weight: 500;
        }
        
        select, .file-upload {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            transition: all 0.3s;
            background-color: var(--white);
        }
        
        select:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 2px var(--light-blue);
        }
        
        .file-upload {
            position: relative;
            overflow: hidden;
            cursor: pointer;
            text-align: center;
            color: var(--dark-gray);
        }
        
        .file-upload input[type="file"] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }
        
        .file-upload:hover {
            background-color: var(--light-blue);
            border-color: var(--primary-blue);
        }
        
        .submit-btn {
            background-color: var(--primary-blue);
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
            font-weight: 500;
            margin-top: 10px;
        }
        
        .submit-btn:hover {
            background-color: var(--dark-blue);
        }
        
        .file-name {
            margin-top: 8px;
            font-size: 14px;
            color: var(--primary-blue);
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add New Student</h1>
        <form id="studentForm">
            <div class="form-group">
                <label for="studentClass">Class</label>
                <select id="studentClass" required>
                    <option value="" disabled selected>Select a class</option>
                    <option value="class1">Class 1 </option>
                    <option value="class2">Class 2 </option>
                    <option value="class3">Class 3 </option>
                    <option value="class4">Class 4 </option>
                    <option value="class5">Class 5 </option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="studentFile">Student File</label>
                <div class="file-upload">
                    <span id="fileLabel">Choose file or drag here</span>
                    <input type="file" id="studentFile" required>
                </div>
                <div class="file-name" id="fileName"></div>
            </div>
            
            <button type="submit" class="submit-btn">Add Student</button>
        </form>
    </div>

    <script>
        document.getElementById('studentFile').addEventListener('change', function(e) {
            const fileNameDisplay = document.getElementById('fileName');
            const fileLabel = document.getElementById('fileLabel');
            
            if (this.files.length > 0) {
                fileNameDisplay.textContent = 'Selected: ' + this.files[0].name;
                fileNameDisplay.style.display = 'block';
                fileLabel.textContent = 'Change file';
            } else {
                fileNameDisplay.style.display = 'none';
                fileLabel.textContent = 'Choose file or drag here';
            }
        });
        
        document.getElementById('studentForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Here you would handle the form submission
            alert('Student added successfully!');
            this.reset();
            document.getElementById('fileName').style.display = 'none';
            document.getElementById('fileLabel').textContent = 'Choose file or drag here';
        });
    </script>
</body>
</html>