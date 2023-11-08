@include('partial.header')

<div class="container">
    <h1 class="mt-4">Halaman Transaksi</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>Nama Pelanggan</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>$100.00</td>
            </tr>
        </tbody>
    </table>

    <button class="btn btn-primary" id="create-transaction">Buat Transaksi Baru</button>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="script.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

@include('partial.footer')
