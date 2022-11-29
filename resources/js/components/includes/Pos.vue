<template>

    <div class="contentPOS">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 order-xl-first order-last">
                    <div class="card card-custom gutter-b bg-white border-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between colorfull-select">
                                <div class="selectmain">
                                    <select class="arabic-select w-150px bag-primary">
                                        <option value="1">A block Oshxona</option>
                                        <option value="2">C block Oshxona</option>
                                    </select>
                                </div>

                                <div class="selectmain">
                                    <select class="arabic-select w-150px bag-secondary">
                                        <option value="1">Milliy taomlar</option>
                                        <option value="2">Ichimliklar</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="product-items">
                            <div class="row">

                                <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6" v-for="product in products">
                                    <div class="productCard">
                                        <div class="productThumb">
                                            <img class="img-fluid" :src="'assets/images/food/' + product.image" alt="ix">
                                        </div>
                                        <div class="productContent">
                                            <a href="#">
                                                {{ product.name }}
                                            </a>
                                            <span>{{ product.price }}</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-xl-5 col-lg-8 col-md-8">
                    <div class="">
                        <div class="card card-custom gutter-b bg-white border-0 table-contentpos">
                            <div class="card-body">
                                <div class="d-flex justify-content-between colorfull-select">
                                    <div class="selectmain">
                                        <label class="text-dark d-flex" for="form1">Xaridorning ismi</label>
                                        <input type="text" class="form-control border-dark" id="form1" placeholder="Aliyev Ali" name="customer_name">
                                    </div>

                                    <div class="d-flex flex-column selectmain">
                                        <label class="text-dark d-flex" for="form2">Xaridorning telefon raqami</label>
                                        <input type="text" class="form-control border-dark" id="form2" placeholder="+998 " value="+998 " name="customer_phone">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-custom gutter-b bg-white border-0 table-contentpos">
                            <div class="card-body" >
                                <div class="form-group row mb-0">
                                    <div class="col-md-12">
                                        <label >Tanlangan mahsulotlar</label> <!--<b>Jami: 11ta</b>-->

                                        <fieldset class="form-group mb-0 d-flex barcodeselection">
                                            <select class="form-control w-50" id="exampleFormControlSelect1">
                                                <option>Ismi bo'yicha</option>
                                                <option>Narxi bo'yicha</option>
                                            </select>
                                            <input type="text" class="form-control border-dark" id="basicInput1" placeholder="Qidiruv">
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="table-datapos">
                                <div class="table-responsive" id="printableTable">
                                    <table id="orderTable" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Nomi</th>
                                            <th>Narxi</th>
                                            <th>Soni</th>
                                            <th>Jami</th>
                                            <th class=" text-right no-sort"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Osh</td>
                                            <td>20 000 so'm</td>
                                            <td>
                                                <input type="number" value="1" class="form-control border-dark w-100px" id="basicInput2" placeholder="">
                                            </td>
                                            <td>20 000 so'm</td>
                                            <td>
                                                <div class="card-toolbar text-right">
                                                    <a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Achchiq chuchuk</td>
                                            <td>8 000 so'm</td>
                                            <td>
                                                <input type="number" value="2" class="form-control border-dark w-100px" id="basicInput3" placeholder="">
                                            </td>
                                            <td>16 000 so'm</td>
                                            <td>
                                                <div class="card-toolbar text-right">
                                                    <a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Non (4ta bo'lak)</td>
                                            <td>500 so'm</td>
                                            <td>
                                                <input type="number" value="2" class="form-control border-dark w-100px" id="basicInput5" placeholder="">
                                            </td>
                                            <td>1 000 so'm</td>
                                            <td>
                                                <div class="card-toolbar text-right">
                                                    <a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Ko'k choy (choynakda)</td>
                                            <td>1 000 so'm</td>
                                            <td>
                                                <input type="number" value="1" class="form-control border-dark w-100px" id="basicInput6" placeholder="">
                                            </td>
                                            <td>1 000 so'm</td>
                                            <td>
                                                <div class="card-toolbar text-right">
                                                    <a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-body" >
                                <div class="form-group row mb-0">
                                    <div class="col-md-12 btn-submit d-flex justify-content-end">
                                        <button type="submit" class="btn btn-danger mr-2 confirm-delete" title="Delete">
                                            <i class="fas fa-trash-alt mr-2"></i>
                                            Bekor qilish
                                        </button>
                                        <button type="submit" class="btn btn-secondary white">
                                            <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-folder-fill svg-sm mr-2" viewBox="0 0 16 16">
                                                <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                                            </svg>
                                            Saqlab qoyish
                                        </button>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4">
                    <div class="card card-custom gutter-b bg-white border-0">
                        <div class="card-body" >
                            <div class="shop-profile">
                                <div class="media">
                                    <div class="bg-primary w-100px h-100px d-flex justify-content-center align-items-center">
                                        <h2 class="mb-0 white">K</h2>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h3 class="title font-weight-bold">KIUT oshxonasi</h3>
                                        <p class="phoonenumber">
                                            +998 (71) 200 66 60
                                        </p>
                                        <p class="adddress">
                                            O'zbekiston Respublikasi Toshkent shahar, KIUT Universiteti
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="resulttable-pos">
                                <table class="table right-table">

                                    <tbody>
                                    <tr class="d-flex align-items-center justify-content-between">
                                        <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
                                            Barcha maxsulotlar
                                        </th>
                                        <td class="border-0 justify-content-end d-flex text-dark font-size-base">6</td>

                                    </tr>
                                    <tr class="d-flex align-items-center justify-content-between">
                                        <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
                                            Narxi
                                        </th>
                                        <td class="border-0 justify-content-end d-flex text-dark font-size-base">38 000 so'm</td>

                                    </tr>
                                    <!--<tr class="d-flex align-items-center justify-content-between">
                                        <th class="border-0 ">
                                            <div class="d-flex align-items-center font-size-h5 mb-0 font-size-bold text-dark">
                                                DISCOUNT(65%)
                                                <span class="badge badge-secondary white rounded-circle ml-2"  data-toggle="modal" data-target="#discountpop">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-sm" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_31" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                                        <g>
                                                        <rect x="234.362" y="128" width="43.263" height="256"></rect>
                                                        <rect x="128" y="234.375" width="256" height="43.25"></rect>
                                                        </g>
                                                        </svg>
                                                </span>

                                            </div>
                                        </th>
                                        <td class="border-0 justify-content-end d-flex text-dark font-size-base">10%</td>

                                    </tr>-->
                                    <tr class="d-flex align-items-center justify-content-between">
                                        <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
                                            Soliq
                                        </th>
                                        <td class="border-0 justify-content-end d-flex text-dark font-size-base">380 so'm</td>

                                    </tr>
                                    <tr class="d-flex align-items-center justify-content-between">
                                        <th class="border-0">
                                            <div class="d-flex align-items-center font-size-h5 mb-0 font-size-bold text-dark">
                                                Yetkazib berish
                                                <span class="badge badge-secondary white rounded-circle ml-2"  data-toggle="modal" data-target="#shippingcost">
												<svg xmlns="http://www.w3.org/2000/svg" class="svg-sm" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_11" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
													<g>
													<rect x="234.362" y="128" width="43.263" height="256"></rect>
													<rect x="128" y="234.375" width="256" height="43.25"></rect>
													</g>
													</svg>
												</span>

                                            </div>
                                        </th>
                                        <td class="border-0 justify-content-end d-flex text-dark font-size-base">0 so'm (mavjud emas)</td>

                                    </tr>

                                    <tr class="d-flex align-items-center justify-content-between item-price">
                                        <th class="border-0 font-size-h5 mb-0 font-size-bold text-primary">

                                            JAMI
                                        </th>
                                        <td class="border-0 justify-content-end d-flex text-primary font-size-base">38 380 so'm</td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-end align-items-center flex-column buttons-cash">
                                <div>
                                    <a href="#" class="btn btn-primary white mb-2"  data-toggle="modal" data-target="#payment-popup">
                                        <i class="fas fa-money-bill-wave mr-2"></i>
                                        Naxt to'lov qilish
                                    </a>

                                </div>
                                <div>
                                    <a href="#" class="btn btn-outline-secondary ">
                                        <i class="fas fa-credit-card mr-2"></i>
                                        Kartadan to'lov qilish
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "Pos",
    data: function(){
        return {
            products: [
                { id: 1, slug: 'osh', name: "Osh", image: 'osh.jpg', price: '20 000 UZS', price_sum: '20000', cabinet: 'a1', status: true },
                { id: 2, slug: 'norin', name: "Norin", image: 'norin.jpg', price: '22 000 UZS', price_sum: '22000', cabinet: 'a1', status: true },
                { id: 3, slug: 'achchiq', name: "Achchiq chuchuk", image: 'achchiq.jpg', price: '8 000 UZS', price_sum: '8000', cabinet: 'a1', status: true },
                { id: 4, slug: 'non', name: "Non (4ta bo'lak)", image: 'non.jpg', price: '500 UZS', price_sum: '500', cabinet: 'a1', status: true },
                { id: 5, slug: 'kokchoy', name: "Ko'k choy (choynakda)", image: 'kokchoy.jpg', price: '1 000 UZS', price_sum: '1000', cabinet: 'a1', status: true },
            ],
            cart: [
                { id: 1, product_id: 1, count: 1 },
                { id: 2, product_id: 3, count: 2 },
                { id: 3, product_id: 4, count: 2 },
                { id: 4, product_id: 5, count: 1 },
            ]
        }
    }
}
</script>

<style scoped>

</style>
