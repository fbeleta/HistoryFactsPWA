<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit News</title>
    <link rel="stylesheet" href="style.css">
    <script>
function validateForm() {
    var title = document.getElementById("title").value.trim();
    var summary = document.getElementById("summary").value.trim();
    var content = document.getElementById("content").value.trim();
    var image = document.getElementById("image").value.trim();  // For file inputs, you may need additional validation

    var isValid = true;

    // Reset any previous error styles and messages
    document.getElementById("title").style.border = "";
    document.getElementById("titleError").innerHTML = "";
    document.getElementById("summary").style.border = "";
    document.getElementById("summaryError").innerHTML = "";
    document.getElementById("content").style.border = "";
    document.getElementById("contentError").innerHTML = "";
    document.getElementById("image").style.border = "";
    document.getElementById("imageError").innerHTML = "";

    // Check each field and apply error style and message if empty
    if (title.length < 5 || title.length > 30) {
        document.getElementById("title").style.border = "1px solid red";
        document.getElementById("titleError").innerHTML = "Naslov mora imati između 5 i 30 znakova.";
        document.getElementById("titleError").style.fontSize = "12px";
        document.getElementById("titleError").style.color = "red";
        isValid = false;
    } else {
        document.getElementById("title").style.border = "1px solid green";
    }
    if (summary.length < 10 || summary.length > 100) {
        document.getElementById("summary").style.border = "1px solid red";
        document.getElementById("summaryError").innerHTML = "Sažetak mora imati između 10 i 100 znakova.";
        document.getElementById("summaryError").style.fontSize = "12px";
        document.getElementById("summaryError").style.color = "red";
        isValid = false;
    } else {
        document.getElementById("summary").style.border = "1px solid green";
    }
    if (content === "") {
        document.getElementById("content").style.border = "1px solid red";
        document.getElementById("contentError").innerHTML = "Sadržaj ne može biti prazan.";
        document.getElementById("contentError").style.fontSize = "12px";
        document.getElementById("contentError").style.color = "red";
        isValid = false;
    } else {
        document.getElementById("content").style.border = "1px solid green";
    }
    if (image === "") {
        document.getElementById("image").style.border = "1px solid red";
        document.getElementById("imageError").innerHTML = "Slika mora biti odabrana.";
        document.getElementById("imageError").style.fontSize = "12px";
        document.getElementById("imageError").style.color = "red";
        isValid = false;
    } else {
        document.getElementById("image").style.border = "1px solid green";
    }
    if (category === "") {
        document.getElementById("category").style.border = "1px solid red";
        document.getElementById("categoryError").innerHTML = "Kategorija mora biti odabrana.";
        document.getElementById("categoryError").style.fontSize = "12px";
        document.getElementById("categoryError").style.color = "red";
        isValid = false;
    } else {
        document.getElementById("category").style.border = "1px solid green";
    }

    return isValid;
}

document.getElementById("gumb").onclick = function (event) {
var slanje_forme=true;
slanje_forme=validateForm();
if (slanje_forme!=true) event.preventDefault();
}
</script>

</head>
<body>
    <header>
        <?php include('header.php')?>
    </header>
    <main>
        <h2>Submit News</h2>
        <form name="newsForm" action="skripta.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" >
            <span id="titleError" class="error"></span><br><br>

            <label for="summary">Summary:</label>
            <textarea id="summary" name="summary" rows="4" shown=true ></textarea>
            <span id="summaryError" class="error"></span><br><br>

            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="10" ></textarea>
    <span id="contentError" class="error-message"></span><br><br>

            <label for="category">Category:</label>
            <select id="category" name="category" >
                <option value="Svijet">Svijet</option>
                <option value="Europa">Europa</option>
            </select><br><br>
    <span id="categoryError" class="error-message"></span><br>

            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*" >
    <span id="imageError" class="error"></span><br>

            <label for="archive">Archive this news:</label>
            <input type="checkbox" id="archive" name="archive"><br>

            <button type="submit" >Submit</button>
        </form>
    </main>
    <footer>
        <?php include('footer.php')?>
    </footer>
</body>
</html>
