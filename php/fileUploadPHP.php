
<!DOCTYPE html>
<html>
    <body>

        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
        <!--
        폼의 방식은 포스트
        enctype은 multipart/form-data를 사용해야 함
        encoding type 이고 이미지를 전송할때는 위의 값을 줘야함
        input을 file로 주면 찾기 버튼이 나옴
        -->

    </body>
</html>
