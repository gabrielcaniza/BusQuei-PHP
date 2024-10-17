document.getElementById('bus-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Impede o envio padrão do formulário
    
    // Coleta os dados do formulário
    const busNumber = document.getElementById('bus-number').value;
    const busRoute = document.getElementById('bus-route').value;
    const busCapacity = document.getElementById('bus-capacity').value;
    const busDriver = document.getElementById('bus-driver').value;

    // Cria um objeto de ônibus
    const bus = {
        number: busNumber,
        route: busRoute,
        capacity: busCapacity,
        driver: busDriver
    }; // Aqui está o fechamento correto do objeto bus

    // Adiciona o ônibus ao localStorage
    let buses = JSON.parse(localStorage.getItem('buses')) || [];
    buses.push(bus);
    localStorage.setItem('buses', JSON.stringify(buses));

    // Redireciona para a página de ônibus cadastrados
    window.location.href = 'onibus.html'; // Aqui pode haver um erro, se não houver um fechamento correto
});
