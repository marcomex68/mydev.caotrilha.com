<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CãoTrilha — Login</title>
 
    
</head>
 
<body>
 
<main class="card">
    <h2>CãoTrilha</h2>
    <h1>Iniciar sessão</h1>
 
    <form id="loginForm">
        <label for="user">Email ou utilizador</label>
        <input id="user" type="text" required placeholder="marquinhosjujitsu2680@gmail.com">
 
        <label for="pwd">Palavra-passe</label>
        <div class="input-with-toggle">
            <input id="pwd" type="password" class="has-toggle" required placeholder="********">
            <button type="button" class="toggle" id="togglePwd">mostrar</button>
        </div>
 
        <div class="actions">
            <label>
                <input type="checkbox" id="remember">
                Manter sessão iniciada
            </label>
        </div>
 
        <button type="submit">Entrar</button>
 
        <div id="feedback" class="feedback"></div>
    </form>
</main>
 
<script>
    // Mostrar / ocultar password
    const toggle = document.getElementById("togglePwd");
    const pwd = document.getElementById("pwd");
 
    toggle.addEventListener("click", () => {
        const visivel = pwd.type === "text";
        pwd.type = visivel ? "password" : "text";
        toggle.textContent = visivel ? "mostrar" : "ocultar";
    });
 
    // Login com controlo de sessão
    const form = document.getElementById("loginForm");
    const feedback = document.getElementById("feedback");
 
    form.addEventListener("submit", function(e){
        e.preventDefault();
 
        const user = document.getElementById("user").value.trim();
        const password = pwd.value.trim();
        const remember = document.getElementById("remember").checked;
 
        // Credenciais simuladas
        if(user === "marquinhosjujitsu2680@gmail.com" && password === "1234"){
 
            if(remember){
                localStorage.setItem("adminLogado", "true");
            } else {
                sessionStorage.setItem("adminLogado", "true");
            }
 
            window.location.href = "admin.html";
 
        } else {
            feedback.textContent = "Credenciais inválidas.";
        }
    });
</script>
 
</body>
</html>
 