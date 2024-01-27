{{-- Add Product --}}
<div class="modal fade" id="tambahProduct" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="nama_product">Nama Product : </label>
                        <input class="form-control" required type="text" name="nama_product" id="nama_product">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Product : </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input class="form-control" required type="number" min="1" name="harga"
                                id="harga">
                            <div class="input-group-prepend">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category Product : </label>
                        <select class="form-select form-control" required name="category_id" id="category_id">
                            <option>Select Category</option>
                            @foreach ($category as $c)
                                <option value="{{ $c->id }}">{{ $c->category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="stok">Jumlah Product : </label>
                        <input class="form-control" required type="number" name="stok" id="stok">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto Product : </label>
                        <input class="form-control-file" required type="file" name="foto" id="foto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Edit Product --}}
<div class="modal fade" id="editProduct" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="editProductForm" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_product">Nama Product : </label>
                        <input class="form-control" required type="text" name="nama_product" id="edit_nama_product">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Product : </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input class="form-control" required type="number" min="1" name="harga"
                                id="edit_harga">
                            <div class="input-group-prepend">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category Product : </label>
                        <select class="form-select form-control" required name="category_id" id="edit_category_id">

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="stok">Jumlah Product : </label>
                        <input class="form-control" required type="number" name="stok" id="edit_stok">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto Product : </label>
                        <div class="row">
                            <div class="col-lg-6">
                                <h5>Foto Baru (Optional)</h5>
                                <input class="form-control-file" type="file" name="foto" id="foto">
                            </div>
                            <div class="col-lg-6">
                                <h5>Foto Lama</h5>
                                <img id="fotoPreview" src="" width="100px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Add Category --}}
<div class="modal fade" id="tambahCategory" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="category">Nama Category : </label>
                        <input class="form-control" required type="text" name="category" id="category">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Edit Category --}}
<div class="modal fade" id="editCategory" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" id="editCategoryForm" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="category">Nama Category : </label>
                        <input class="form-control" required type="text" name="category" id="edit_category">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // import Swal from 'sweetalert2';
        editCategory();
        hapusProduct();
        hapusCategory();
        editProduct();
    });
</script>

<script>
    function editCategory() {
        $('.edit-category').on('click', function() {
            var categoryId = $(this).data('id');

            $.ajax({
                url: '/category/' + categoryId + '/edit',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#edit_category').val(data.category);
                    $('#editCategoryForm').attr('action', '/category/' + categoryId);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    }

    function hapusProduct() {
        $('.delete-product').on('click', function(e) {
            e.preventDefault();
            var productId = $(this).data('id');
            Swal.fire({
                title: "Apakah Anda Yakin ?",
                text: "Tindakan tidak bisa diulangi lagi !!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus Product!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#deleteProductForm').attr('action', '{{route('products.hapus', ':id')}}'.replace(':id', productId));
                    $('#deleteProductForm').submit();
                }
            });
        });
    }

    function hapusCategory() {
        $('.delete-category').on('click', function(e) {
            e.preventDefault();
            var productId = $(this).data('id');
            Swal.fire({
                title: "Apakah Anda Yakin ?",
                text: "Tindakan tidak bisa diulangi lagi !!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus Category!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#deleteCategoryForm').attr('action', '{{route('category.hapus', ':id')}}'.replace(':id', productId));
                    $('#deleteCategoryForm').submit();
                }
            });
        });
    }

    function editProduct() {
        $('.edit-product').on('click', function() {
            var productId = $(this).data('id');

            // Lakukan request Ajax untuk mendapatkan data produk dan kategori
            $.ajax({
                url: '/products/' + productId + '/edit',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // console.log(data.nama_produk);
                    // Set nilai pada modal berdasarkan data yang diterima
                    $('#edit_nama_product').val(data.nama_produk);
                    $('#edit_harga').val(data.harga);
                    $('#edit_stok').val(data.stok);
                    $('#fotoPreview').attr('src', '/product/' + data.foto);
                    // Ganti action form untuk menyertakan ID produk yang akan diubah
                    $('#editProductForm').attr('action', '/products/' + productId);

                    // Ambil data kategori
                    $.ajax({
                        url: '/category', // Ganti dengan URL yang sesuai untuk mendapatkan data kategori
                        type: 'GET',
                        dataType: 'json',
                        success: function(categories) {
                            // Hapus semua opsi sebelum menambahkannya kembali
                            $('#edit_category_id').empty();

                            // Tambahkan opsi kategori dari data yang diambil
                            categories.forEach(function(category) {
                                var option = $('<option>', {
                                    value: category.id,
                                    text: category.category
                                });

                                // Tentukan apakah opsi ini yang dipilih berdasarkan category_id
                                if (category.id === data
                                    .category_id) {
                                    option.prop('selected', true);
                                }

                                // Tambahkan opsi ke elemen select
                                $('#edit_category_id').append(
                                    option);
                            });

                            // Tampilkan modal setelah menambahkan opsi
                            // $('#editProduct').modal('show');
                        },
                        error: function(error) {
                            console.log(error);
                            // Handle error jika diperlukan
                        }
                    });
                },
                error: function(error) {
                    console.log(error);
                    // Handle error jika diperlukan
                }
            });
        });
    }
</script>
