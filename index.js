paypal.Buttons({
    style: {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: '2.65'
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            window.location.replace("http://127.0.0.1/nft/success.php")
        })
    },
    onCancel: function (data) {
        window.location.replace("http://127.0.0.1/nft/Oncancel.php")
    }
}).render('#paypal-payment-button');
