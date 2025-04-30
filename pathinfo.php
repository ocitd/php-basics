<?php
$error_message = "";
$success_message = "";

if (isset($_POST["submit"])) {
    $ext_allowed = ["png", "jpg"];
    $file = $_FILES["file"];
    $file_name = $file["name"];
    $file_size = $file["size"];
    $file_tmp = $file["tmp_name"];
    $file_error = $file["error"];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $max_size = 102400; // 100 KB

    if ($file_error !== UPLOAD_ERR_OK) {
        $error_message = '<small class="text-danger">The field file is required!</small>';
    } else {
        if (in_array($file_ext, $ext_allowed)) {
            if ($file_size <= $max_size) {
                if (!file_exists('./uploads')) {
                    mkdir('./uploads', 0777, true);
                }

                $new_file_name = uniqid() . '.' . $file_ext;
                $upload_path = "./uploads/" . $new_file_name;
                move_uploaded_file($file_tmp, $upload_path);
                $success_message = '<small class="text-success">File transferred successfully</small>';
            } else {
                $error_message = '<small class="text-danger">The file must be smaller than 100KB!</small>';
            }
        } else {
            $error_message = '<small class="text-danger">The ext must be in: png or jpg!</small>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>
<body>
    <div class="container mt-3">
        <form action="" method="post" enctype="multipart/form-data" class="bg-light p-5 shadow border">
            <div class="mb-3">
                <label for="file" class="mb-1 d-block">File <span class="text-danger">*</span></label>
                <input type="file" name="file" class="form-control">
                <?php echo $error_message; ?>
                <?php echo $success_message; ?>
            </div>
            <div class="mb-3">
                <a href="#" data-fancybox="preview" style="display: none;"></a>
                <img src="#" alt="" class="shadow img-thumbnail" style="display: none; width: 200px; border-radius: 4px;">
            </div>
            <input type="submit" value="Upload" name="submit" class="btn btn-primary">
        </form>
    </div>

    <script>
        const fileinput = document.querySelector("input[name=file]");
        const image = document.querySelector("img");
        const link = document.querySelector("a");

        fileinput.addEventListener("change", function(){
            const file = this.files[0];

            if(file){
                const reader = new FileReader();

                reader.addEventListener("load", function(){
                    image.src = this.result;
                    image.style.display = "block";
                    link.href = this.result;
                    link.style.display = "inline-block";
                });

                reader.readAsDataURL(file);
            } else {
                image.style.display = "none";
                image.src = "";
                link.style.display = "none";
                link.href = "#";
            }
        });
    </script>
</body>
</html>