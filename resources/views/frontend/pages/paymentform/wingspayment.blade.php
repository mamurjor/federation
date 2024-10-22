@extends('backend.client')
@section('main-content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default credit-card-box m-5">
                <div class="panel-heading display-table">
                    <h3 class="panel-title">Payment Details</h3>
                </div>
                <form id="paymentForm">
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="number" name="amount" placeholder="Amount" required>
                    <button type="submit">Pay with EasyPaisa</button>
                </form>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
                <script>
                    document.getElementById('paymentForm').addEventListener('submit', function(e) {
                        e.preventDefault();

                        const formData = new FormData(this);
                        const data = {
                            email: formData.get('email'),
                            amount: formData.get('amount')
                        };

                        axios.post('/initiate-payment', data)
                            .then(response => {
                                console.log(response.data);
                                // Handle the response accordingly
                            })
                            .catch(error => {
                                console.error(error);
                                // Handle the error accordingly
                            });
                    });
                </script>
            @endsection
