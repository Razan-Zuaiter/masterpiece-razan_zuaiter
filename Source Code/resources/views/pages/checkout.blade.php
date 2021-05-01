@extends('layouts.templet')

@section('shop_content')
    <div class="page-banner-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>الشراء</h2>
                        <ul dir="ltr">
                            <li>
                                <a href="/">الرئيسة</a>
                            </li>
                            <li>الشراء</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="apply-area ptb-100">
        <div class="container">
            <div class="apply-form ">
                <form action="checkout" method="POST" style="display:flex">
                    {{ csrf_field() }}
                    @method('POST')
                    <div class="col-lg-6 col-12 col-custom">
                        <h3>تفاصيل الشحن</h3>
                        <div class="row">
                            <div class="col-md-6 col-custom">
                                <div class="form-group">
                                    <label>الاسم الأول <span class="required">*</span></label>
                                    <input placeholder="لولي الأمر" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="form-group">
                                    <label>الاسم الأخير<span class="required">*</span></label>
                                    <input placeholder="لولي الأمر" type="text" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-custom">
                                <div class="form-group">
                                    <label>العنوان <span class="required">*</span></label>
                                    <input name="location" placeholder="عنوان ولي الأمر " type="text" class="form-control"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-6 col-custom">
                                <div class="form-group">
                                    <label>البريد الالكتروني<span class="required">*</span></label>
                                    <input placeholder="لولي الأمر" type="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="form-group">
                                    <label>رقم الهاتف <span class="required">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="form-group">

                                    <label>تاريخ توصيل الطلب<span class="required">*</span></label>
                                    <input class="form-control" type="date" name="date" id="example-date-input" dir="rtl"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-12 col-custom">
                                <textarea class="form-control" id="checkout-mess" cols="85" rows="10"
                                    placeholder=" هل ترغب بارسال كلمة لطفلك ؟ الكلمات التشجعية تترك لدى أطفالكم انطباعاتٍ لا تنسى"></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 col-12 col-custom" style="margin-right: 2rem;">
                        <div class="apply-form">
                            <h3>الفاتورة</h3>
                            <div class="your-order-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="cart-product-name">الكتب</th>
                                            <th class="cart-product-name">عدد الكتب</th>
                                            <th class="cart-product-total">سعر الكتاب الواحد</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $total = 0; ?>
                                        @if (session('cart'))
                                            @foreach (session('cart') as $id => $details)
                                                <?php $total += $details['price'] * $details['quantity']; ?>
                                                <tr class="cart_item">
                                                    <td class="cart-product-name">{{ $details['name'] }} </td>
                                                    <td class="cart-product-total text-center"><span
                                                            class="product-quantity">{{ $details['quantity'] }}</span>
                                                    </td>
                                                    <td class="cart-product-total text-center"><span class="amount">JOD
                                                            {{ $details['price'] }}</span></td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr class="order-total">
                                            <th>السعر النهائي</th>
                                            <td class="text-center"><strong><span class="amount">JOD
                                                        {{ $total }}</span></strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    <div id="accordion">
                                        <div class="card">
                                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                                <div class="card-body mb-2 mt-2">
                                                    <img src="https://img.icons8.com/bubbles/50/000000/in-transit.png" />
                                                    شحن مجاني
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-button-payment">
                                        <input class="default-btn" type="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
