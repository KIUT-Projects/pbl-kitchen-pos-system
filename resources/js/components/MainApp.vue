<template>

    <header class="pos-header bg-white">
        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="greeting-text">
                        <h3 class="card-label mb-0 font-weight-bold text-primary">
                            KIUT Oshona
                        </h3>
                        <h3 class="card-label mb-0 ">
                            ISE-51U
                        </h3>
                    </div>

                </div>

                <div class="col-xl-4 col-lg-5 col-md-6 clock-main">
                    <div class="clock">
                        <div class="datetime-content">
                            <ul>
                                <li id="hours"></li>
                                <li id="point1">:</li>
                                <li id="min"></li>
                                <li id="point">:</li>
                                <li id="sec"></li>
                            </ul>
                        </div>
                        <div class="datetime-content">
                            <div id="Date" class=""></div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-4 col-lg-3 col-md-12  order-lg-last order-second">

                    <div class="topbar justify-content-end">
                        <div class="dropdown mega-dropdown">
                            <div id="id2" class="topbar-item " data-toggle="dropdown" data-display="static">
                                <div class="btn btn-icon w-auto h-auto btn-clean d-flex align-items-center py-0 mr-3">
                                     <span class="symbol symbol-35 symbol-light-success">
                                         <span class="symbol-label bg-primary  font-size-h5 ">

                                             <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                                  fill="#fff" class="bi bi-calculator-fill" viewBox="0 0 16 16">
                                                 <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2 .5v2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.5.5zm0 4v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM4.5 9a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM4 12.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM7.5 6a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM7 9.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM10 6.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-1z"/>
                                               </svg>
                                         </span>
                                     </span>
                                </div>
                            </div>

                            <div class="dropdown-menu dropdown-menu-right calu" style="min-width: 248px;">
                                <div class="calculator">
                                    <div class="input" id="input"></div>
                                    <div class="buttons">
                                        <div class="operators">
                                            <div>+</div>
                                            <div>-</div>
                                            <div>&times;</div>
                                            <div>&divide;</div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="leftPanel">
                                                <div class="numbers">
                                                    <div>7</div>
                                                    <div>8</div>
                                                    <div>9</div>
                                                </div>
                                                <div class="numbers">
                                                    <div>4</div>
                                                    <div>5</div>
                                                    <div>6</div>
                                                </div>
                                                <div class="numbers">
                                                    <div>1</div>
                                                    <div>2</div>
                                                    <div>3</div>
                                                </div>
                                                <div class="numbers">
                                                    <div>0</div>
                                                    <div>.</div>
                                                    <div id="clear">C</div>
                                                </div>
                                            </div>
                                            <div class="equal" id="result">=</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="dropdown">
                            <div class="topbar-item" data-toggle="dropdown" data-display="static">
                                <div class="btn btn-icon w-auto h-auto btn-clean d-flex align-items-center py-0">

							 <span class="symbol symbol-35 symbol-light-success">
								 <span class="symbol-label font-size-h5 ">
									 <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-person-fill"
                                          fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										 <path fill-rule="evenodd"
                                               d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
									 </svg>
								 </span>
							 </span>
                                </div>
                            </div>

                            <div class="dropdown-menu dropdown-menu-right" style="min-width: 150px;">


                                <a href="#" class="dropdown-item">
							 <span class="svg-icon svg-icon-xl svg-icon-primary mr-2">
								 <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24"
                                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" class="feather feather-power">
									 <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
									 <line x1="12" y1="2" x2="12" y2="12"></line>
								 </svg>
							 </span>
                                    Logout
                                </a>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </header>

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
                                        <option value="2" disabled>C block Oshxona</option>
                                    </select>
                                </div>

                                <div class="selectmain">
                                    <select class="arabic-select w-150px bag-secondary">
                                        <option value="1">Milliy taomlar</option>
                                        <option value="2" disabled>Ichimliklar</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="product-items">
                            <div class="row">
                                <div v-for="product in products" class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6"
                                     @click="addToCart(product.id)">
                                    <div class="productCard">
                                        <div class="productThumb">
                                            <img class="img-fluid" :src="product.photo" alt="ix">
                                        </div>
                                        <div class="productContent">
                                            <p>
                                                {{ product.name }}
                                            </p>
                                            <span>
                                                    {{ priceFormat(product.price) }} so'm
                                                </span>
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
                                        <input type="text" class="form-control border-dark" id="form1"
                                               placeholder="Aliyev Ali" name="customer_name" v-model="customerDetails.name">
                                    </div>

                                    <div class="d-flex flex-column selectmain">
                                        <label class="text-dark d-flex" for="form2">Xaridorning telefon raqami</label>
                                        <input type="text" class="form-control border-dark" id="form2"
                                               placeholder="+998 " name="customer_phone" v-model="customerDetails.phone">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-custom gutter-b bg-white border-0 table-contentpos">
                            <div class="card-body">
                                <div class="form-group row mb-0">
                                    <div class="col-md-12">
                                        <label>Tanlangan mahsulotlar</label> <!--<b>Jami: 11ta</b>-->

                                    </div>
                                </div>
                            </div>
                            <div class="table-datapos">
                                <div v-if="cart.length" class="table-responsive" id="printableTable">
                                    <table id="orderTable" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Nomi</th>
                                            <th>Narxi</th>
<!--                                            <th>Soni</th>-->
<!--                                            <th>Jami</th>-->
                                            <th class=" text-right no-sort"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="cProduct in cart">
                                            <td>{{ cProduct.name }}</td>
                                            <td>{{ priceFormat(cProduct.price) }} so'm</td>
<!--                                            <td>
                                                <input type="number" value="1" class="form-control border-dark w-100px"
                                                       id="basicInput2" placeholder="">
                                            </td>-->
<!--                                            <td>{{ priceFormat(cProduct.price) }} so'm</td>-->
                                            <td>
                                                <div class="card-toolbar text-right">
                                                    <a @click="removeFromCart(id)" href="#" class="confirm-delete"
                                                       title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div v-else class="empty-cart">
                                    <img class="img-fluid" src="/assets/img/front/empty-cart.png">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row mb-0">
                                    <div class="col-md-12 btn-submit d-flex justify-content-end">
                                        <button @click="clearFromCart()" type="submit" class="btn btn-danger mr-2" title="Delete">
                                            <i class="fas fa-trash-alt mr-2"></i>
                                            Bekor qilish
                                        </button>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4">
                    <div class="card card-custom gutter-b bg-white border-0">
                        <div class="card-body">
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
                                        <td class="border-0 justify-content-end d-flex text-dark font-size-base">{{ cart.length }}</td>

                                    </tr>
                                    <tr class="d-flex align-items-center justify-content-between">
                                        <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
                                            Narxi
                                        </th>
                                        <td class="border-0 justify-content-end d-flex text-dark font-size-base">{{ priceFormat(cartDetails.productsPrice) }}
                                            so'm
                                        </td>

                                    </tr>
                                    <tr class="d-flex align-items-center justify-content-between">
                                        <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
                                            Soliq
                                        </th>
                                        <td class="border-0 justify-content-end d-flex text-dark font-size-base">{{ priceFormat(cartDetails.commissionPrice) }}
                                            so'm
                                        </td>

                                    </tr>
                                    <tr class="d-flex align-items-center justify-content-between">
                                        <th class="border-0">
                                            <div class="d-flex align-items-center font-size-h5 mb-0 font-size-bold text-dark">
                                                Yetkazib berish
                                            </div>
                                        </th>
                                        <td class="border-0 justify-content-end d-flex text-dark font-size-base">0 so'm
                                            (mavjud emas)
                                        </td>

                                    </tr>

                                    <tr class="d-flex align-items-center justify-content-between item-price">
                                        <th class="border-0 font-size-h5 mb-0 font-size-bold text-primary">

                                            JAMI
                                        </th>
                                        <td class="border-0 justify-content-end d-flex text-primary font-size-base">{{ priceFormat(cartDetails.totalPrice) }} so'm
                                        </td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-end align-items-center flex-column buttons-cash">

                                <div>
                                    <a href="#" class="btn btn-success" id="paymentModal" data-toggle="modal" data-target="#payment-popup">
                                        <i class="fas fa-credit-card mr-2"></i>
                                        Buyurtmani yakunlash
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade text-left" id="payment-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11"
         style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable  modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel11">Tolov</h3>
                    <button type="button" class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0"
                            data-dismiss="modal" aria-label="Close">
                        <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table right-table">
                        <tbody>
                        <tr class="d-flex align-items-center justify-content-between">
                            <th class="border-0 px-0 font-size-lg mb-0 font-size-bold text-primary">

                                Jami summa :

                            </th>
                            <td class="border-0 justify-content-end d-flex text-primary font-size-lg font-size-bold px-0 font-size-lg mb-0 font-size-bold text-primary">

                                {{ priceFormat(cartDetails.totalPrice) }}

                            </td>
                        </tr>
                        <tr class="d-flex align-items-center justify-content-between">
                            <th class="border-0 px-0 font-size-lg mb-0 font-size-bold text-primary">

                                Tolov turi :

                            </th>
                            <td class="border-0 justify-content-end d-flex text-primary font-size-lg font-size-bold px-0 font-size-lg mb-0 font-size-bold text-primary">

                                Naxt

                            </td>

                        </tr>
                        </tbody>
                    </table>
                    <form>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="text-body">Qaydlar uchun (majburiy emas)</label>
                                <fieldset class="form-label-group ">
                                    <textarea class="form-control fixed-size" id="horizontalTextarea" rows="5"
                                              placeholder="Qayd kiriting" v-model="customerDetails.comment"></textarea>

                                </fieldset>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end mb-0">
                            <div class="col-md-6 text-right">
                                <a href="#" @click="orderNow()" class="btn btn-lg btn-success">Buyurtmani tasdiqlash</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import apiPos from "../api/apiPos";
export default {
    name: "MainApp",
    data() {
        return  {
            cart: [],
            cartDetails: {
                productsPrice: 0,
                commissionPrice: 0,
                totalPrice: 0,
            },
            customerDetails: {
                name: "",
                phone: "+998",
                comment: ""
            },
            company: {
                phone: '',
                email: '',
            },
            page: {
                header: {
                    links: [
                        {name: "Asosiy"},
                        {name: "Filiallar"},
                        {name: "Vakantlar"},
                        {name: "Yangiliklar"},
                        {name: "Biz haqimizda"},
                        {name: "Kontaktlar"},
                    ]
                }
            },
            products: []
        }
    },
    created() {
        //
    },
    mounted() {
        this.apiGetProducts();
    },
    methods: {
        apiGetProducts(){
            apiPos.getProducts().then((response) => {
                if(response.data.status){
                    //console.log(response.data)
                    this.products = response.data.data
                }else{
                    console.log(response.data)
                }
            })
        },

        addToCart(id){
            console.log('product added (id: ' + id + ')')
            this.cart.push(
                this.getProductByID(id)
            )
            this.sumCart()

        },
        sumCart(){
            let productsPrice = 0;
            let commission = 15;
            this.cart.forEach(function (cartProduct, index) {
                productsPrice += parseInt(cartProduct.price)
            })

            let commissionPrice = (productsPrice / 100 * commission)
            this.cartDetails.productsPrice = productsPrice
            this.cartDetails.commissionPrice = commissionPrice
            this.cartDetails.totalPrice = productsPrice + commissionPrice

        },
        removeFromCart(id){
            let removeCartIndex;
            this.cart.forEach(function (eid, index){
                //console.log(eid)
                if (eid.id === id) {
                    console.log('remove: id ' + id)
                    removeCartIndex = index;
                }
            })
            this.cart.shift(removeCartIndex)
            this.sumCart()
        },
        clearFromCart(){
            this.cart = []
            this.sumCart()
        },
        getProductByID(id){
            console.log('get product (id: ' + id + ')')
            return this.products.filter(d => d.id === id)[0];
        },
        orderNow(){
            let order = {
                cart: this.cart,
                customer: this.customerDetails,
                totalPrice: this.cartDetails.totalPrice
            }

            apiPos.sendOrder(order).then((response) => {
                if(response.data.status){
                    console.log('order sent')
                    console.log(response.data)

                    this.cart = []

                    this.cartDetails = {
                        productsPrice: 0,
                            commissionPrice: 0,
                            totalPrice: 0,
                    }

                    this.customerDetails = {
                        name: "",
                        phone: "+998 ",
                        comment: ""
                    }

                    //$('#payment-popup').modal('hide')
                    document.getElementById('payment-popup').click();


                    //this.products = response.data.data
                }else{
                    console.log(response.data)
                }
            })

            console.log(order)
        },
        priceFormat(price, add = ''){
            return this.number_format(price, 0, '.', ' ') + '' + add;
        },
        number_format (number, decimals = 0, dec_point = '.', thousands_sep = ' ') {
            // Strip all characters but numerical ones.
            number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function (n, prec) {
                    var k = Math.pow(10, prec);
                    return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
        }

    }

}
</script>

<style scoped>

</style>
