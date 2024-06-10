const btnajax = document.getElementById("btnajax");
const inputText = document.getElementById("texto");
btnajax.onclick = () => {
    let formData = new FormData();
    formData.append('datos', inputText.value);
    fetch("", {
        method: "POST",
        body: formData
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en la petición');
            }
            return response.json(); // Asumiendo que el servidor responde con JSON
        })
        .then(data => {
            console.log('Éxito:', data);
            // Manejar la respuesta exitosa
        })
        .catch(error => {
            console.error('Error:', error);
            // Manejar el error
        });
}