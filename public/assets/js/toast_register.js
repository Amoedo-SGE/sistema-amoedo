document.addEventListener("DOMContentLoaded", function () {
    const registrationForm = document.getElementById("registrationForm");
  
    registrationForm.addEventListener("submit", function (event) {
      event.preventDefault();
  
      // Envia os dados do formulário via AJAX
      fetch(registrationForm.getAttribute("action"), {
        method: "POST",
        body: new FormData(registrationForm)
      })
        .then(response => response.json())
        .then(data => {
          // Exibe a mensagem de sucesso ou erro usando um toast
          const toast = document.createElement("div");
          toast.classList.add("toast", data.success ? "success" : "error");
          toast.textContent = data.message;
          document.body.appendChild(toast);
  
          setTimeout(() => {
            toast.classList.add("show");
          }, 300);
  
          setTimeout(() => {
            toast.classList.remove("show");
            setTimeout(() => {
              document.body.removeChild(toast);
            }, 500);
          }, 3000); // Fecha o toast após 3 segundos
        })
        .catch(error => {
          console.error("Erro ao processar a solicitação:", error);
          showToast("error", "Erro ao processar a solicitação. Por favor, tente novamente.");
        });
    });
  
    // Função para exibir o toast
    function showToast(type, message) {
      console.log(type, message); 
    }
  });
  