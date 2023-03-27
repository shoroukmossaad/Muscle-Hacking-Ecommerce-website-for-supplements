@extends('Layouts.Layout_NF')
<link rel="stylesheet" href="{{ asset('assets/css/productsinglepage.css') }}">

@section('contant')
    <div class="container">
        <div class="row g-5 my-5">
            @foreach ($product as $product)
                <div class="col-6 col-md-4  ">
                    <div class="product-media w-100">
                        <img src="{{ asset("uploads/$product->image") }} "class="w-100" alt="product image">
                    </div>
                </div>

                <div class="col-6 col-md-4 ">
                    <div class="product-detail">
                        <h2> {{ $product->title }}</h2>
                        <h5>By<a class="text-info">  Optimum Nutrition</a></h5>
                    </div>
                </div>


                <div class="col-6 col-md-4 ">
                    <div class="product-buy">
                        <h2 style="color: green"><strong> EGP {{ $product->price }}</strong></h2>

                        {{-- <div class="qty-controls">
                            <a class="btn-qty-control btn-qty-control--minus" title="Decrease quantity">
                                <i class="fas fa-minus"></i>
                            </a>
                            <div class="input-box-with-animation">
                                <div class="input-box input-with-value input-active">
                                    <label for="qty">Quantity</label>
                                    <input type="number" name="qty" pattern="\d*(\.\d+)?" id="qty" value="1"
                                        size="4" title="Quantity:" class="input-text qty validate-arabic-digit"
                                        maxlength="12">
                                </div>
                            </div>
                            <a class="btn-qty-control btn-qty-control--plus" title="Increase quantity">
                                <i class="fas fa-plus"></i>
                            </a> --}}


                            <div class="d-flex" style="max-width: fit-content">
                                <button class="button  align-content-center px-3 me-2"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                    <i class="fas fa-minus"></i>
                                </button>

                                <div class="form-outline">
                                    <input id="form1" min="1" max="5" name="quantity"
                                        value="0" type="number"
                                        class="form-control" />
                                    <label class="form-label" for="form1">Quantity </label>
                                </div>

                                <button class="btn btn-primary px-3 ms-2"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>



                            {{-- <div class="field qty">
                                <div class="qty-wrapper">
                                    <div class="qty-controls">
                                        <a class="btn-qty-control btn-qty-control--minus" title="Decrease quantity">
                                            <i class="fas fa-minus"></i>
                                        </a>
                                        <div class="input-box-with-animation">
                                            <div class="input-box input-with-value input-active">
                                                <label for="qty">Quantity</label>
                                                <input type="number" name="qty" pattern="\d*(\.\d+)?" id="qty"
                                                    value="1" size="4" title="Quantity:"
                                                    class="input-text qty validate-arabic-digit" maxlength="12">
                                            </div>
                                        </div>
                                        <a class="btn-qty-control btn-qty-control--plus" title="Increase quantity">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="actions">
                                <form action="{{ route('add_to_cart', $product->id) }}" method="POST">
                                    @csrf
                                <button type="submit" title="Add to Cart" class=" w-75 button py-2 action primary tocart" id="product-addtocart-button" ins-init-condition="#I3Byb2R1Y3QtYWRkdG9jYXJ0LWJ1dHRvbjpub3QoW2Rpc2FibGVkXSksIC5mb3RvcmFtYS1pdGVtIC5mb3RvcmFtYV9fc3RhZ2VfX2ZyYW1lOmZpcnN0IGltZw==">
                                <span>Add to Cart</span>
                                </button>
                                </form>

                                </div>
                            <form action="{{ route('add_to_cart', $product->id) }}" method="POST">
                                @csrf

                                {{-- <i class="fas fa-shopping-cart position-absolute"></i> --}}
                                <button type="submit"
                                    class="w-100 btn btn-outline-primary addToCart position-relative mt-3">
                                    <i class="fas fa-shopping-cart "></i> Add to cart
                                </button>
                            </form>
                        </div>


                    </div>
                </div>
                @if ($product->id == 1)
                    <div class="row g-5">
                        <div class="col-md-8">
                            <h5 class="des"><strong> Description:</strong></h5>
                            <p style="color:black"> <strong><li class="m-0 p-0"> </strong> great choice for female and male bodybuilders, athletes, or those on
                                high protein diets</li>
                                <br><strong><li class="m-0 p-0"></strong>Contains 24 grams of protein into every serving to support your muscle-building needs.</li>
                                <br><strong><li></strong>Higher pure protein percentage, nearly 79% protein concertation (24 g of protein per 30.4
                                g
 serving size)</li>
                                <br><strong><li></strong>More than 4 Grams of Glutamine & Glutamic Acid in Each Serving</li>
                                <br><strong><li> </strong>More Than 5 Grams of the Amino Acids (BCAAs) Leucine, Isoleucine, and Valine in Each
                                Serving</li>
                                <br><strong><li></strong>Quality powder that Mix easily with a spoon, blender, or a shaker cup</li>
                                <br> <strong><li></strong>Naturally and artificially flavored with more than 15 tasty and delicious flavors to
                                choose
                                from
                                Pre-workout, post-workout, or even first thing in the morning</li>
                                <br><strong><li></strong>Country of Origin: USA</li>
                            </p>

                            <h5 class="des"><strong> Directions Of Use:</strong></h5>
                            <p style="color:black">
                                <strong> When To Use –</strong> First thing in the morning, before or after exercise, between
                                meals,
                                with a meal, or
                                any time of the day, where you need a protein boost to your balanced diet.

                                <br><strong> SUGGESTED USE:</strong> Add 1 scoop in 180-240 ml water, milk, or beverage of your
                                choice.
                                You can also add
                                it to a smoothie or shake. Consume approximately 1 gram of protein per pound of body weight per
                                day
                                through a combination of high protein foods and protein supplements. For even the best results,
                                consume your daily protein allotment over several small meals spread evenly throughout the day.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="product attribute supplement_facts">
                                <h2><strong> Supplement Facts </strong></h2>
                                <div>
                                    <span class="warn-suppliment-chart">Nutrition facts might vary based on the
                                        flavour</span>
                                </div>
                                <table class="main-table" id="product-attribute-specs-table">
                                    <colgroup>
                                        <col width="25%">
                                        <col>
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="value">
                                                    <table id="label_outer_table" class="outer_label">
                                                        <tbody>
                                                            <tr id="facts_outer_line" class="outer_label">
                                                                <td id="facts_outer_cell" class="outer_label">
                                                                    <table id="facts_table" class="facts_label">
                                                                        <tbody>
                                                                            <tr id="facts_line_0" class="facts_label">
                                                                                <td id="facts_cell_0_1"
                                                                                    class="seq_span label_size"><span
                                                                                        id="facts_span_0_1_1"
                                                                                        class="seq_span label_size">5
                                                                                        Lbs.</span></td>
                                                                                <td id="facts_cell_0_3"
                                                                                    class="seq_span label_flavor"
                                                                                    colspan="2"><span
                                                                                        id="facts_span_0_3_1"
                                                                                        class="seq_span label_flavor">Double
                                                                                        Rich Chocolate</span></td>
                                                                            </tr>
                                                                            <tr id="facts_line_2" class="facts_label">
                                                                                <td id="facts_cell_2_1"
                                                                                    class="seq_span label_serving"
                                                                                    colspan="3"><span
                                                                                        id="facts_span_2_1_1"
                                                                                        class="seq_span label_serving">Serving
                                                                                        Size: </span><span
                                                                                        id="facts_span_2_1_2"
                                                                                        class="seq_span_non_first label_serving">1
                                                                                    </span><span id="facts_span_2_1_3"
                                                                                        class="seq_span_non_first label_serving">Rounded
                                                                                        Scoop</span><span
                                                                                        id="facts_span_2_1_4"
                                                                                        class="seq_span_non_first label_serving">(30.4</span><span
                                                                                        id="facts_span_2_1_5"
                                                                                        class="seq_span_non_first label_serving_alt">g)</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr id="facts_line_5" class="facts_label">
                                                                                <td id="facts_cell_5_1"
                                                                                    class="seq_span label_heading_l"><span
                                                                                        id="facts_span_5_1_1"
                                                                                        class="seq_span label_heading_l">Amount
                                                                                        Per Serving&nbsp;<em>(Note: the
                                                                                            following facts may slightly
                                                                                            vary depending on the different
                                                                                            flavors)</em><br></span></td>
                                                                                <td id="facts_cell_5_3"
                                                                                    class="seq_span label_heading_r"
                                                                                    colspan="2">&nbsp;</td>
                                                                            </tr>
                                                                            <tr id="facts_line_7" class="facts_label">
                                                                                <td id="facts_cell_7_1"
                                                                                    class="seq_span label_ing"><span
                                                                                        id="facts_span_7_1_1"
                                                                                        class="seq_span label_ing">Calories</span>
                                                                                </td>
                                                                                <td id="facts_cell_7_2"
                                                                                    class="seq_span label_qty"><span
                                                                                        id="facts_span_7_2_2"
                                                                                        class="seq_span_non_first label_qty">120</span>
                                                                                </td>
                                                                                <td id="facts_cell_7_3"
                                                                                    class="seq_span label_dv">&nbsp;</td>
                                                                            </tr>
                                                                            <tr id="facts_line_8" class="facts_label">
                                                                                <td id="facts_cell_8_1"
                                                                                    class="line_above seq_span label_ing line_indent">
                                                                                    <span id="facts_span_8_1_1"
                                                                                        class="seq_span label_ing line_indent">Calories
                                                                                        From Fat</span>
                                                                                </td>
                                                                                <td id="facts_cell_8_2"
                                                                                    class="line_above seq_span label_qty">
                                                                                    <span id="facts_span_8_2_2"
                                                                                        class="seq_span_non_first label_qty">10</span>
                                                                                </td>
                                                                                <td id="facts_cell_8_3"
                                                                                    class="line_above seq_span label_dv">
                                                                                    &nbsp;</td>
                                                                            </tr>
                                                                            <tr id="facts_line_10" class="facts_label">
                                                                                <td id="facts_cell_10_1"
                                                                                    class="seq_span label_heading_l">&nbsp;
                                                                                </td>
                                                                                <td id="facts_cell_10_3"
                                                                                    class="seq_span label_heading_r"
                                                                                    colspan="2"><span
                                                                                        id="facts_span_10_3_1"
                                                                                        class="seq_span label_heading_r">%
                                                                                        Daily Value*</span></td>
                                                                            </tr>
                                                                            <tr id="facts_line_12" class="facts_label">
                                                                                <td id="facts_cell_12_1"
                                                                                    class="seq_span label_ing"><span
                                                                                        id="facts_span_12_1_1"
                                                                                        class="seq_span label_ing">Total
                                                                                        Fat</span></td>
                                                                                <td id="facts_cell_12_2"
                                                                                    class="seq_span label_qty"><span
                                                                                        id="facts_span_12_2_2"
                                                                                        class="seq_span_non_first label_qty">1</span><span
                                                                                        id="facts_span_12_2_3"
                                                                                        class="seq_span_non_first label_qty">g</span>
                                                                                </td>
                                                                                <td id="facts_cell_12_3"
                                                                                    class="seq_span label_dv"><span
                                                                                        id="facts_span_12_3_1"
                                                                                        class="seq_span label_dv">2%</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr id="facts_line_13" class="facts_label">
                                                                                <td id="facts_cell_13_1"
                                                                                    class="line_above seq_span label_ing line_indent">
                                                                                    <span id="facts_span_13_1_1"
                                                                                        class="seq_span label_ing line_indent">Saturated
                                                                                        Fat</span>
                                                                                </td>
                                                                                <td id="facts_cell_13_2"
                                                                                    class="line_above seq_span label_qty">
                                                                                    <span id="facts_span_13_2_2"
                                                                                        class="seq_span_non_first label_qty">0.5</span><span
                                                                                        id="facts_span_13_2_3"
                                                                                        class="seq_span_non_first label_qty">g</span>
                                                                                </td>
                                                                                <td id="facts_cell_13_3"
                                                                                    class="line_above seq_span label_dv">
                                                                                    <span id="facts_span_13_3_1"
                                                                                        class="seq_span label_dv">3%</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr id="facts_line_14" class="facts_label">
                                                                                <td id="facts_cell_14_1"
                                                                                    class="line_above seq_span label_ing line_indent">
                                                                                    <span id="facts_span_14_1_1"
                                                                                        class="seq_span label_ing line_indent">Trans
                                                                                        Fat</span>
                                                                                </td>
                                                                                <td id="facts_cell_14_2"
                                                                                    class="line_above seq_span label_qty">
                                                                                    <span id="facts_span_14_2_2"
                                                                                        class="seq_span_non_first label_qty">0</span><span
                                                                                        id="facts_span_14_2_3"
                                                                                        class="seq_span_non_first label_qty">g</span>
                                                                                </td>
                                                                                <td id="facts_cell_14_3"
                                                                                    class="line_above seq_span label_dv">
                                                                                    &nbsp;</td>
                                                                            </tr>
                                                                            <tr id="facts_line_15" class="facts_label">
                                                                                <td id="facts_cell_15_1"
                                                                                    class="line_above seq_span label_ing">
                                                                                    <span id="facts_span_15_1_1"
                                                                                        class="seq_span label_ing">Cholesterol</span>
                                                                                </td>
                                                                                <td id="facts_cell_15_2"
                                                                                    class="line_above seq_span label_qty">
                                                                                    <span id="facts_span_15_2_2"
                                                                                        class="seq_span_non_first label_qty">30</span><span
                                                                                        id="facts_span_15_2_3"
                                                                                        class="seq_span_non_first label_qty">mg</span>
                                                                                </td>
                                                                                <td id="facts_cell_15_3"
                                                                                    class="line_above seq_span label_dv">
                                                                                    <span id="facts_span_15_3_1"
                                                                                        class="seq_span label_dv">10%</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr id="facts_line_16" class="facts_label">
                                                                                <td id="facts_cell_16_1"
                                                                                    class="line_above seq_span label_ing">
                                                                                    <span id="facts_span_16_1_1"
                                                                                        class="seq_span label_ing">Sodium</span>
                                                                                </td>
                                                                                <td id="facts_cell_16_2"
                                                                                    class="line_above seq_span label_qty">
                                                                                    <span id="facts_span_16_2_2"
                                                                                        class="seq_span_non_first label_qty">130</span><span
                                                                                        id="facts_span_16_2_3"
                                                                                        class="seq_span_non_first label_qty">mg</span>
                                                                                </td>
                                                                                <td id="facts_cell_16_3"
                                                                                    class="line_above seq_span label_dv">
                                                                                    <span id="facts_span_16_3_1"
                                                                                        class="seq_span label_dv">5%</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr id="facts_line_17" class="facts_label">
                                                                                <td id="facts_cell_17_1"
                                                                                    class="line_above seq_span label_ing">
                                                                                    <span id="facts_span_17_1_1"
                                                                                        class="seq_span label_ing">Total
                                                                                        Carbohydrate</span>
                                                                                </td>
                                                                                <td id="facts_cell_17_2"
                                                                                    class="line_above seq_span label_qty">
                                                                                    <span id="facts_span_17_2_2"
                                                                                        class="seq_span_non_first label_qty">3</span><span
                                                                                        id="facts_span_17_2_3"
                                                                                        class="seq_span_non_first label_qty">g</span>
                                                                                </td>
                                                                                <td id="facts_cell_17_3"
                                                                                    class="line_above seq_span label_dv">
                                                                                    <span id="facts_span_17_3_1"
                                                                                        class="seq_span label_dv">1%</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr id="facts_line_18" class="facts_label">
                                                                                <td id="facts_cell_18_1"
                                                                                    class="line_above seq_span label_ing line_indent">
                                                                                    <span id="facts_span_18_1_1"
                                                                                        class="seq_span label_ing line_indent">Sugars</span>
                                                                                </td>
                                                                                <td id="facts_cell_18_2"
                                                                                    class="line_above seq_span label_qty">
                                                                                    <span id="facts_span_18_2_2"
                                                                                        class="seq_span_non_first label_qty">1</span><span
                                                                                        id="facts_span_18_2_3"
                                                                                        class="seq_span_non_first label_qty">g</span>
                                                                                </td>
                                                                                <td id="facts_cell_18_3"
                                                                                    class="line_above seq_span label_dv">
                                                                                    &nbsp;</td>
                                                                            </tr>
                                                                            <tr id="facts_line_19" class="facts_label">
                                                                                <td id="facts_cell_19_1"
                                                                                    class="line_above seq_span label_ing">
                                                                                    <span id="facts_span_19_1_1"
                                                                                        class="seq_span label_ing">Protein</span>
                                                                                </td>
                                                                                <td id="facts_cell_19_2"
                                                                                    class="line_above seq_span label_qty">
                                                                                    <span id="facts_span_19_2_2"
                                                                                        class="seq_span_non_first label_qty">24</span><span
                                                                                        id="facts_span_19_2_3"
                                                                                        class="seq_span_non_first label_qty">g</span>
                                                                                </td>
                                                                                <td id="facts_cell_19_3"
                                                                                    class="line_above seq_span label_dv">
                                                                                    &nbsp;</td>
                                                                            </tr>
                                                                            <tr id="facts_line_21" class="facts_label">
                                                                                <td id="facts_cell_21_1"
                                                                                    class="seq_span label_ing"><span
                                                                                        id="facts_span_21_1_1"
                                                                                        class="seq_span label_ing">Vitamin
                                                                                        A</span></td>
                                                                                <td id="facts_cell_21_2"
                                                                                    class="seq_span label_qty">&nbsp;</td>
                                                                                <td id="facts_cell_21_3"
                                                                                    class="seq_span label_dv"><span
                                                                                        id="facts_span_21_3_1"
                                                                                        class="seq_span label_dv">0%</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr id="facts_line_22" class="facts_label">
                                                                                <td id="facts_cell_22_1"
                                                                                    class="line_above seq_span label_ing">
                                                                                    <span id="facts_span_22_1_1"
                                                                                        class="seq_span label_ing">Vitamin
                                                                                        C</span>
                                                                                </td>
                                                                                <td id="facts_cell_22_2"
                                                                                    class="line_above seq_span label_qty">
                                                                                    &nbsp;</td>
                                                                                <td id="facts_cell_22_3"
                                                                                    class="line_above seq_span label_dv">
                                                                                    <span id="facts_span_22_3_1"
                                                                                        class="seq_span label_dv">0%</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr id="facts_line_23" class="facts_label">
                                                                                <td id="facts_cell_23_1"
                                                                                    class="line_above seq_span label_ing">
                                                                                    <span id="facts_span_23_1_1"
                                                                                        class="seq_span label_ing">Calcium</span>
                                                                                </td>
                                                                                <td id="facts_cell_23_2"
                                                                                    class="line_above seq_span label_qty">
                                                                                    &nbsp;</td>
                                                                                <td id="facts_cell_23_3"
                                                                                    class="line_above seq_span label_dv">
                                                                                    <span id="facts_span_23_3_1"
                                                                                        class="seq_span label_dv">8%</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr id="facts_line_24" class="facts_label">
                                                                                <td id="facts_cell_24_1"
                                                                                    class="line_above seq_span label_ing">
                                                                                    <span id="facts_span_24_1_1"
                                                                                        class="seq_span label_ing">Iron</span>
                                                                                </td>
                                                                                <td id="facts_cell_24_2"
                                                                                    class="line_above seq_span label_qty">
                                                                                    &nbsp;</td>
                                                                                <td id="facts_cell_24_3"
                                                                                    class="line_above seq_span label_dv">
                                                                                    <span id="facts_span_24_3_1"
                                                                                        class="seq_span label_dv">2%</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr id="facts_line_26" class="facts_label">
                                                                                <td id="facts_cell_26_1"
                                                                                    class="seq_span label_notes_sm"
                                                                                    colspan="3"><span
                                                                                        id="facts_span_26_1_1"
                                                                                        class="seq_span label_notes_sm">Not
                                                                                        a Significant Source of Dietary
                                                                                        Fiber</span></td>
                                                                            </tr>
                                                                            <tr id="facts_line_27" class="facts_label">
                                                                                <td id="facts_cell_27_1"
                                                                                    class="seq_span label_notes_sm"
                                                                                    colspan="3"><span
                                                                                        id="facts_span_27_1_1"
                                                                                        class="seq_span label_notes_sm">*
                                                                                        Percent Daily Values are based on a
                                                                                        2,000 calorie diet. Your Daily
                                                                                        Values may be higher or lower
                                                                                        depending on your calorie
                                                                                        needs.</span></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr id="other_outer_line" class="outer_label">
                                                                <td id="other_outer_cell" class="outer_label">
                                                                    <table id="other_table" class="other_label">
                                                                        <tbody>
                                                                            <tr id="other_line_29" class="other_label">
                                                                                <hr class="border-5" />
                                                                                <td id="other_cell_29_1"
                                                                                    class="seq_span label_heading_l"><span
                                                                                        id="other_span_29_1_1"
                                                                                        class="seq_span label_heading_l"><strong> Ingredients:</strong></span>
                                                                                </td>
                                                                                <td id="other_cell_29_3"
                                                                                    class="seq_span label_heading_r"
                                                                                    colspan="2">&nbsp;</td>
                                                                            </tr>
                                                                            <tr id="other_line_30" class="other_label">
                                                                                <td id="other_cell_30_1"
                                                                                    class="seq_span label_ing_2"><span
                                                                                        id="other_span_30_1_1"
                                                                                        class="seq_span label_ing_2">Protein
                                                                                        Blend</span><span
                                                                                        id="other_span_30_1_2"
                                                                                        class="seq_span_non_first label_ing_2">(Whey
                                                                                        Protein Isolate</span><span
                                                                                        id="other_span_31_1_1"
                                                                                        class="seq_span label_ing_2">,
                                                                                        Cultured Whey Protein
                                                                                        Concentrate</span><span
                                                                                        id="other_span_32_1_1"
                                                                                        class="seq_span label_ing_2">, Whey
                                                                                        Peptides</span><span
                                                                                        id="other_span_32_1_2"
                                                                                        class="seq_span_non_first label_ing_2">)</span><span
                                                                                        id="other_span_33_1_1"
                                                                                        class="seq_span label_ing_2">,
                                                                                        Cocoa</span><span
                                                                                        id="other_span_33_1_2"
                                                                                        class="seq_span_non_first label_ing_2">(Processed
                                                                                        With Alkali)</span><span
                                                                                        id="other_span_34_1_1"
                                                                                        class="seq_span label_ing_2">,
                                                                                        Artificial Flavors</span><span
                                                                                        id="other_span_35_1_1"
                                                                                        class="seq_span label_ing_2">,
                                                                                        Lecithin</span><span
                                                                                        id="other_span_36_1_1"
                                                                                        class="seq_span label_ing_2">,
                                                                                        Acesulfame Potassium</span><span
                                                                                        id="other_span_37_1_1"
                                                                                        class="seq_span label_ing_2">,
                                                                                        Aminogen®</span><span
                                                                                        id="other_span_38_1_1"
                                                                                        class="seq_span label_ing_2">,
                                                                                        Lactase.</span></td>
                                                                            </tr>
                                                                            <tr id="other_line_40" class="other_label">
                                                                                <td id="other_cell_40_1"
                                                                                    class="seq_span label_heading_l"><span
                                                                                        id="other_span_40_1_1"
                                                                                        class="seq_span label_heading_l">ALLERGEN
                                                                                        INFORMATION:</span></td>
                                                                                <td id="other_cell_40_3"
                                                                                    class="seq_span label_heading_r"
                                                                                    colspan="2">&nbsp;</td>
                                                                            </tr>
                                                                            <tr id="other_line_41" class="other_label">
                                                                                <td id="other_cell_41_1"
                                                                                    class="seq_span label_ing"
                                                                                    colspan="3"><span
                                                                                        id="other_span_41_1_1"
                                                                                        class="seq_span label_ing">Contains
                                                                                        Milk And Soy (Lecithin)
                                                                                        Ingredients.</span></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                @endif
            @endforeach

        </div>

    </div>

    {{-- <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script> --}}
@endsection
