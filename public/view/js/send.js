// Crear un objeto de la clase Order
const order = new Order('usuario_ejemplo');

// Agregar datos de envío
order.addShippingData({
    fullname: 'Nombre Completo',
    address: 'Dirección',
    postalCode: 'Código Postal',
    city: 'Localidad',
    province: 'Provincia',
    country: 'País',
    phone: 'Teléfono'
});

// Agregar títulos de libros
for (let i = 0; i < 12; i++) {
    order.addBookTitle('Título del Libro ' + (i + 1));
}

// Establecer el precio total
order.setTotalPrice('Precio Total');

// Convertir el objeto en una cadena JSON
const jsonData = order.toJSON();

fetch('https://example.com/api/orders', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: jsonData
})
.then(response => response.json())
.then(data => console.log('Data sent:', data))
.catch((error) => {
    console.error('Error:', error);
});