<x-layout titlePage="Hanaka | Cart">
    <div class="md:mx-8">
        <x-navbar></x-navbar>

        {{-- ======== PAGE IMPORTS ======== --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <h2 class="text-3xl font-bold text-gray-900 text-center mt-8">Checkout Pesanan</h2>
        <div class="grid grid-cols-8 gap-x-8 mx-8 mt-4 my-6">
            {{-- form section --}}
            <div class="col-span-8 lg:col-span-5 shadow-custom1 px-5 py-4 rounded-lg">
                <form action="" method="POST">
                    <div class="flex flex-col space-y-3">
                        <div class="flex flex-col space-y-1">
                            <label for="nama" class="col-span-3">Nama Penerima</label>
                            <input type="text"
                                class="col-span-9 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="Michael Alexander" name="" id="nama" required maxlength="100">
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label for="alamat" class="col-span-3">Alamat</label>
                            <input type="text"
                                class="col-span-9 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="Jl. Paguyuban II No.14" name="" id="alamat" required maxlength="100">
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label for="provinsi">Provinsi</label>
                            <select class="select2-data-array browser-default" id="select2-provinsi"></select>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label for="kota_kab">Kota/Kabupaten</label>
                            <select class="select2-data-array browser-default" id="select2-kabupaten"></select>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label for="kecamatan">Kecamatan</label>
                            <select class="select2-data-array browser-default" id="select2-kecamatan"></select>
                        </div>
                        <div class="grid grid-cols-12 gap-10">
                            <div class="col-span-3 flex flex-col space-y-1">
                                <label for="kode_pos" class="col-span-3">Kode Pos</label>
                                <input type="text"
                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    placeholder="17115" name="" id="kode_pos" required maxlength="100">
                            </div>
                            <div class="col-span-9 flex flex-col space-y-1">
                                <label for="no_telp" class="col-span-3">Nomor Telepon</label>
                                <div class="flex">
                                    <span
                                        class="flex items-center bg-grey-lighter rounded rounded-r-none border border-r-0 border-gray-300 px-3 text-grey-dark text-sm">+62</span>
                                    <input type="text"
                                        class="w-full border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        placeholder="81234567891" name="" id="no_telp" required>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label for="metode">Metode Pembayaran</label>
                            <select
                                class="select2-basic w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="" id="metode">
                                <option value="">Transfer Virtual Account</option>
                                <option value="">Transfer Bank</option>
                            </select>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label for="metode">Catatan Pemesanan (opsional)</label>
                            <textarea
                                class="col-span-9 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="" id="" cols="30" rows="5" style="resize: none"></textarea>
                        </div>
                        <div class="flex">
                            <button
                                class="relative w-full bg-gray-800 hover:bg-opacity-90 rounded-lg p-2 mt-4 font-semibold text-white text-center">
                                Bayar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            {{-- total price --}}
            <div class="col-span-8 lg:col-span-3 mt-8 lg:mt-0">
                <div class="rounded-lg shadow-custom1 p-4">
                    <p class="font-semibold">Detail Pesanan</p>
                    <hr class="mt-3 mb-2 border-gray-800">
                    <div class="flex bg-gray-300 py-1 font-bold">
                        <p class="">Nama Produk</p>
                        <p class="ml-auto">Subtotal</p>
                    </div>
                    @for ($i = 0; $i < 2; $i++)
                        <div class="flex">
                            <p class="text-gray-400">Varsity Jacket Army x 2</p>
                            <p class="text-gray-400 ml-auto">Rp.790.000</p>
                        </div>
                    @endfor
                    <hr class="my-2 border-gray-800">
                    <div class="flex font-bold">
                        <p class="">Subtotal Produk</p>
                        <p class="ml-auto">Rp.965.000</p>
                    </div>
                    <div class="flex font-bold">
                        <p class="">Ongkos Kirim</p>
                        <p class="ml-auto">Rp.10.000</p>
                    </div>
                    <hr class="my-2 border-gray-800">
                    <div class="flex font-bold">
                        <p class="">Total</p>
                        <p class="ml-auto">Rp.965.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.select2-basic').select2({
                minimumResultsForSearch: Infinity
            });
        });

        let urlProvinsi = "https://ibnux.github.io/data-indonesia/provinsi.json";
        let urlKabupaten = "https://ibnux.github.io/data-indonesia/kabupaten/";
        let urlKecamatan = "https://ibnux.github.io/data-indonesia/kecamatan/";
        let urlKelurahan = "https://ibnux.github.io/data-indonesia/kelurahan/";

        function clearOptions(id) {
            console.log("on clearOptions");

            //$('#' + id).val(null);
            $('#' + id).empty().trigger('change');
        }

        console.log('Load Provinsi...');
        $.getJSON(urlProvinsi, function(res) {

            res = $.map(res, function(obj) {
                obj.text = obj.nama
                return obj;
            });

            data = [{
                id: "",
                nama: "- Pilih Provinsi -",
                text: "- Pilih Provinsi -"
            }].concat(res);

            //implemen data ke select provinsi
            $("#select2-provinsi").select2({
                dropdownAutoWidth: true,
                width: '100%',
                data: data
            })
        });

        let selectProv = $('#select2-provinsi');
        $(selectProv).change(function() {
            console.log("on change selectProv");

            let value = $(selectProv).val();
            let text = $('#select2-provinsi :selected').text();
            console.log("value = " + value + " / " + "text = " + text);

            clearOptions('select2-kabupaten');
            console.log('Load Kabupaten di ' + text + '...')
            $.getJSON(urlKabupaten + value + ".json", function(res) {

                res = $.map(res, function(obj) {
                    obj.text = obj.nama
                    return obj;
                });

                data = [{
                    id: "",
                    nama: "- Pilih Kabupaten -",
                    text: "- Pilih Kabupaten -"
                }].concat(res);

                //implemen data ke select provinsi
                $("#select2-kabupaten").select2({
                    dropdownAutoWidth: true,
                    width: '100%',
                    data: data
                })
            })
        });

        let selectKab = $('#select2-kabupaten');
        $(selectKab).change(function() {
            console.log("on change selectKab");

            let value = $(selectKab).val();
            let text = $('#select2-kabupaten :selected').text();
            console.log("value = " + value + " / " + "text = " + text);

            clearOptions('select2-kecamatan');
            console.log('Load Kecamatan di ' + text + '...')
            $.getJSON(urlKecamatan + value + ".json", function(res) {

                res = $.map(res, function(obj) {
                    obj.text = obj.nama
                    return obj;
                });

                data = [{
                    id: "",
                    nama: "- Pilih Kecamatan -",
                    text: "- Pilih Kecamatan -"
                }].concat(res);

                //implemen data ke select provinsi
                $("#select2-kecamatan").select2({
                    dropdownAutoWidth: true,
                    width: '100%',
                    data: data
                })
            })
        });

        let selectKec = $('#select2-kecamatan');
        $(selectKec).change(function() {
            console.log("on change selectKec");

            let value = $(selectKec).val();
            let text = $('#select2-kecamatan :selected').text();
            console.log("value = " + value + " / " + "text = " + text);

            clearOptions('select2-kelurahan');
            console.log('Load Kelurahan di ' + text + '...')
            $.getJSON(urlKelurahan + value + ".json", function(res) {

                res = $.map(res, function(obj) {
                    obj.text = obj.nama
                    return obj;
                });

                data = [{
                    id: "",
                    nama: "- Pilih Kelurahan -",
                    text: "- Pilih Kelurahan -"
                }].concat(res);

                //implemen data ke select provinsi
                $("#select2-kelurahan").select2({
                    dropdownAutoWidth: true,
                    width: '100%',
                    data: data
                })
            })
        });
    </script>
</x-layout>
