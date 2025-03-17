document.addEventListener("DOMContentLoaded", function () {
    let input = document.querySelector("form input[type='password']");
    let info = document.getElementById("info");
    let timeout = null;

    input.addEventListener("input", function () {
        clearTimeout(timeout);
        timeout = setTimeout(() => {
            authenticate(input.value);
        }, 500);
    });

    function authenticate(key) {
        if (key.trim() === "") return;

        fetch("auth.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ key: key })
        })
        .then(response => response.json())
        .then(data => {
            info.innerHTML = "";
            let message = document.createElement("p");
            message.textContent = data.error || data.success;
            message.style.color = data.error ? "red" : "green";
            info.appendChild(message);

            if (data.success) {
                document.cookie = "auth_session=" + document.cookie + "; path=/";
                setTimeout(() => location.reload(), 1000);
            }
        })
        .catch(error => {
            info.innerHTML = "<p style='color:red;'>Erro na autenticação.</p>";
        });
    }
});
