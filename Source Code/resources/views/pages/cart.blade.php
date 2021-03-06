@extends('layouts.templet')
@section('shop_content')
    <div class="page-banner-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>السّلة</h2>
                        <ul dir="ltr">
                            <li>
                                <a href="/">الرئيسة</a>
                            </li>
                            <li>السّلة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="cart-main-wrapper mt-no-text">
        <div class="container custom-area">
            <div class="row">
                <div class="col-lg-12 col-custom">
                    <!-- Cart Table Area -->
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead style="color:orangered;text-align:center;font-family:'Tajawal', sans-serif;">
                                <tr>
                                    <th class="pro-title">اسم الكتاب</th>
                                    <th class="pro-thumbnail">الكتاب</th>
                                    <th class="pro-price">سعر الكتاب</th>
                                    <th class="pro-quantity">عدد الكتب</th>
                                    <th class="pro-subtotal">السعر النهائي</th>
                                    <th class="pro-remove">إزالة الكتاب</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total = 0;
                                // var_dump(session('cart'));
                                ?>
                                @if (session('cart'))
                                    @foreach (session('cart') as $id => $details)
                                        <?php $total += $details['price'] * $details['quantity']; ?>
                                        <tr style="text-align: center">
                                            <td class="pro-title">{{ $details['name'] }}
                                            </td>
                                            <td class="pro-thumbnail" style="width: 7%"><img
                                                    src="/images/{{ $details['photo'] }}" alt="book" /></td>
                                            <td class="pro-price"><span>{{ $details['price'] }} Jod</span></td>
                                            <td class="pro-quantity">
                                                <div class="cart-plus-minus">
                                                    <input data-id="{{ $id }}" class="cart-plus-minus-box"
                                                        value="{{ $details['quantity'] }}" type="number" min="1">
                                                </div>
                                            </td>
                                            <td class="pro-subtotal">
                                                <span> {{ $details['price'] * $details['quantity'] }} JOD</span>
                                            </td>
                                            <td class="pro-remove"><a data-id="{{ $id }}" class="remove-from-cart"
                                                    href="cart.remove"> <img
                                                        src="https://img.icons8.com/bubbles/75/000000/delete-forever.png" />
                                                </a></td>
                                        </tr>
                                    @endforeach



                                @else
                                    <div style="display: flex ;justify-content:space-around ; padding:2rem">
                                        <h3 style="margin-top: 3rem"> السلة فارغة </h3>
                                        <img
                                            src="https://assets.materialup.com/uploads/87d4df96-a55f-4f4b-9a17-a696eded97f3/preview.gif">
                                    </div>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- Cart Update Option -->
                    <div class="cart-update-option d-block d-md-flex justify-content-between" style="float:left">
                        <div class="cart-update mt-sm-16">
                            <a href="#" id="update-cart" class="optional-btn">تحديث الفاتورة
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-5 ml-auto col-custom" style="float:left">
                    <!-- Cart Calculation Area -->
                    <div class="cart-calculator-wrapper">
                        <div class="cart-calculate-items">
                            <h3>الحساب النهائي</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr class="total">
                                        <td>السعر كاملاً</td>
                                        <td class="total-amount">JOD {{ $total }}</td>
                                    </tr>
                                </table>
                            </div>
                            <a href="checkout" class="default-btn">
                                متابعة الشراء</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- cart main wrapper end -->
@section('scripts')
    <script type="text/javascript">
        $("#update-cart").click(e => {
            e.preventDefault();
            const inputs = document.querySelectorAll(".cart-plus-minus-box");
            const vals = {};
            inputs.forEach(_input => {
                const id = _input.attributes.getNamedItem("data-id");
                if (id) vals[id.value] = _input.value
            })

            $.ajax({
                url: '{{ url('update-cart') }}',
                method: "put",
                data: {
                    _token: '{{ csrf_token() }}',
                    isMulti: true,
                    data: vals
                },
                success: function(response) {
                    window.location.reload();
                }
            });

        })



        $(".remove-from-cart").click(function(e) {
            e.preventDefault();
            var ele = $(this);
            console.log("Remove");

            if (confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>
@endsection
