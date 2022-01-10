<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cash</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
            letter-spacing: 1px;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #485461;
            background-image: linear-gradient(0deg, #28313b -50%, #485461 100%);
            min-height: 100vh;
            margin-bottom: 0px;
        }

        th {
            font-size: 24px;
        }

        tr td {
            background: #34495e;
            font-size: 24px;
            font-weight: 500;
            text-align: left;
            vertical-align: middle !important;

        }

        thead tr {
            color: #eb4d4b;
        }

        .menhgia {
            font-weight: 600;
            color: #f6b93b;
        }

        .tienchu {
            font-weight: 400;
            font-size: 17px;
        }

        .btn-dark {
            font-weight: 600;
            color: #f6b93b;
            border-top: 0px;
            border-right: 0px;
        }

        .btn-dark:hover {
            color: #eb4d4b;
        }

        input[type="number"] {
            text-align: center;
            font-weight: 900;
            color: #fff;
            background-color: #596275;
        }

        input[type="number"]:disabled {
            background-color: #596275;
        }

        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<?php
$arr1 = [
    'c500' => '500,000',
    'c200' => '200,000',
    'c100' => '100,000',
    'c50' => '50,000',
    'c20' => '20,000',
    'c10' => '10,000',
    'c5' => '5,000',
    'c2' => '2,000',
    'c1' => '1,000'
];
$arr2 = [
    'thu' => ['Thu', ''],
    'nhan' => ['Nhận', 'disabled'],
    'thua' => ['Thừa', 'disabled'],
];
?>

<body>
    <div class="container py-2">
        <div class="row">
            <div class="col-lg-1">
                <div class="d-flex justify-content-center">
                    <button id="clear" class="btn btn-dark"><span>Xóa</span></button>
                </div>
            </div>
            <div class="col-lg-4">
                <table class="table table-striped table-dark table-bordered table-sm">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 40%;">Mệnh giá</th>
                            <th class="text-center">Số tờ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($arr1 as $key => $value) {
                            echo '<tr>
                                <td class="menhgia text-right">' . $value . '</td>
                                <td><input type="number" class="form-control" id="' . $key . '" value="0"></td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-7">
                <table class="table table-striped table-dark table-bordered table-sm">
                    <thead>
                        <tr>
                            <th class="text-left" style="width: 20%">Tiền</th>
                            <th class="text-center">Số tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="menhgia">Thu</td>
                            <td>
                                <input type="number" class="form-control" id="c-thu" value="0">
                                <span class="tienchu text-left" id="thu"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="menhgia">Nhận</td>
                            <td>
                                <span id="c-nhan">0</span></br>
                                <span class="tienchu text-left" id="nhan"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="menhgia">Thừa</td>
                            <td>
                                <span id="c-thua">0</span></br>
                                <span class="tienchu text-left" id="thua"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/redux/4.0.5/redux.min.js"></script>
</body>

<script>
    $('#c500').bind("keyup change", function(e) {
        if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
            var val = $(this).val()
        }
        val = $(this).val()
        updateStore.dispatch({
            type: 'UPDATE_C500',
            c500: val
        });
    })
    $('#c200').bind("keyup change", function(e) {
        if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
            var val = $(this).val()
        }
        val = $(this).val()
        updateStore.dispatch({
            type: 'UPDATE_C200',
            c200: val
        });
    })
    $('#c100').bind("keyup change", function(e) {
        if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
            var val = $(this).val()
        }
        val = $(this).val()
        updateStore.dispatch({
            type: 'UPDATE_C100',
            c100: val
        });
    })
    $('#c50').bind("keyup change", function(e) {
        if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
            var val = $(this).val()
        }
        val = $(this).val()
        updateStore.dispatch({
            type: 'UPDATE_C50',
            c50: val
        });
    })
    $('#c20').bind("keyup change", function(e) {
        if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
            var val = $(this).val()
        }
        val = $(this).val()
        updateStore.dispatch({
            type: 'UPDATE_C20',
            c20: val
        });
    })
    $('#c10').bind("keyup change", function(e) {
        if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
            var val = $(this).val()
        }
        val = $(this).val()
        updateStore.dispatch({
            type: 'UPDATE_C10',
            c10: val
        });
    })
    $('#c5').bind("keyup change", function(e) {
        if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
            var val = $(this).val()
        }
        val = $(this).val()
        updateStore.dispatch({
            type: 'UPDATE_C5',
            c5: val
        });
    })
    $('#c2').bind("keyup change", function(e) {
        if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
            var val = $(this).val()
        }
        val = $(this).val()
        updateStore.dispatch({
            type: 'UPDATE_C2',
            c2: val
        });
    })
    $('#c1').bind("keyup change", function(e) {
        if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
            var val = $(this).val()
        }
        val = $(this).val()
        updateStore.dispatch({
            type: 'UPDATE_C1',
            c1: val
        });
    })
    $('#c-thu').bind("keyup change", function(e) {
        if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
            var val = $(this).val()
        }
        val = $(this).val()
        updateStore.dispatch({
            type: 'UPDATE_C_THU',
            c_thu: val
        });
    })

    function clear() {
        $('#c-thu').val(0)
        $('#c500').val(0)
        $('#c200').val(0)
        $('#c100').val(0)
        $('#c50').val(0)
        $('#c20').val(0)
        $('#c10').val(0)
        $('#c5').val(0)
        $('#c2').val(0)
        $('#c1').val(0)
        updateStore.dispatch({
            type: 'CLEAR'
        });
        $('#c500').focus();
    }

    $('#clear').click(function() {
        clear()
    })

    document.onkeydown = function(evt) {
        evt = evt || window.event;
        var isEscape = false;
        if ("key" in evt) {
            isEscape = (evt.key === "Escape" || evt.key === "Esc");
        } else {
            isEscape = (evt.keyCode === 27);
        }
        if (isEscape) {
            clear()
        }
    };

    const updateReducer = (state = {}, actions) => {
        let {
            c_thu = '',
                c500 = '',
                c200 = '',
                c100 = '',
                c50 = '',
                c20 = '',
                c10 = '',
                c5 = '',
                c2 = '',
                c1 = '',
        } = actions;

        switch (actions.type) {
            case 'UPDATE_C_THU':
                return Object.assign({}, state, {
                    c_thu: c_thu
                });
            case 'UPDATE_C500':
                return Object.assign({}, state, {
                    c500: c500
                });
            case 'UPDATE_C200':
                return Object.assign({}, state, {
                    c200: c200
                });
            case 'UPDATE_C100':
                return Object.assign({}, state, {
                    c100: c100
                });
            case 'UPDATE_C50':
                return Object.assign({}, state, {
                    c50: c50
                });
            case 'UPDATE_C20':
                return Object.assign({}, state, {
                    c20: c20
                });
            case 'UPDATE_C10':
                return Object.assign({}, state, {
                    c10: c10
                });
            case 'UPDATE_C5':
                return Object.assign({}, state, {
                    c5: c5
                });
            case 'UPDATE_C2':
                return Object.assign({}, state, {
                    c2: c2
                });
            case 'UPDATE_C1':
                return Object.assign({}, state, {
                    c1: c1
                });
            case 'CLEAR':
                return Object.assign({}, state, {
                    c500: 0,
                    c200: 0,
                    c100: 0,
                    c50: 0,
                    c20: 0,
                    c10: 0,
                    c5: 0,
                    c2: 0,
                    c1: 0,
                    c_thu: 0,
                });
        }
    }
    const updateStore = Redux.createStore(updateReducer)

    updateStore.subscribe(() => {
        cash_cal(updateStore.getState())
    })

    function cash_cal(cashs) {
        var c_thu = ('c_thu' in cashs) ? cashs['c_thu'] : 0;
        var c500 = ('c500' in cashs) ? cashs['c500'] : 0;
        var c200 = ('c200' in cashs) ? cashs['c200'] : 0;
        var c100 = ('c100' in cashs) ? cashs['c100'] : 0;
        var c50 = ('c50' in cashs) ? cashs['c50'] : 0;
        var c20 = ('c20' in cashs) ? cashs['c20'] : 0;
        var c10 = ('c10' in cashs) ? cashs['c10'] : 0;
        var c5 = ('c5' in cashs) ? cashs['c5'] : 0;
        var c2 = ('c2' in cashs) ? cashs['c2'] : 0;
        var c1 = ('c1' in cashs) ? cashs['c1'] : 0;

        total = +(500000 * c500) +
            (200000 * c200) +
            (100000 * c100) +
            (50000 * c50) +
            (20000 * c20) +
            (10000 * c10) +
            (5000 * c5) +
            (2000 * c2) +
            (1000 * c1)

        c_thua = total - c_thu

        function formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
        }

        $('#c-nhan').html(formatNumber(total))
        $('#c-thua').html(formatNumber(c_thua))

        $('#thu').html(dmcs(c_thu))
        $('#nhan').html(dmcs(total))
        $('#thua').html(dmcs(c_thua))
    }

    function dmcs(conso) {
        function light(str) {
            return '<span class="text-warning"> ' + str + '</span>'
        }

        var s09 = ["", " một", " hai", " ba", " bốn", " năm", " sáu", " bảy", " tám", " chín"];
        var lop3 = ["", light('triệu'), " nghìn", light('tỷ'), ","];

        if (conso == "") {
            kq = "";
        } else if (conso != "") {
            if (conso < 0) {
                dau = "<span class='text-danger'>âm </span>";
                conso = conso.toString().replace("-", "");
            } else {
                dau = "";
            };

            var conso = String(conso);
            var sochuso = conso.length % 9;

            if (sochuso >= 0) {
                var sk = "0";
                conso = String(sk.repeat(9 - (sochuso % 12))) + conso;
                docso = "";
                i = 0;
                lop = 1;

                do {
                    n1 = conso.substr(i, 1);
                    n2 = conso.substr(i + 1, 1);
                    n3 = conso.substr(i + 2, 1);
                    // var baso = conso.substr(i, 3)

                    i += 3;

                    if (n1 + n2 + n3 == "000") {
                        if (docso != "" && lop == 3 && (conso.length - i) > 2) {
                            s123 = " tỷ";
                        } else {
                            s123 = '';
                        };
                    } else {
                        if (n1 == 0) {
                            if (docso == "") {
                                s1 = "";
                            } else {
                                s1 = " không trăm";
                            };
                        } else {
                            s1 = s09[n1] + light('trăm');
                        };

                        if (n2 == 0) {
                            if (s1 == "" || n3 == 0) {
                                s2 = "";
                            } else {
                                s2 = light('linh');
                            };
                        } else {
                            if (n2 == 1) {
                                s2 = " mười";
                            } else {
                                s2 = s09[n2] + light('mươi');
                            };
                        };

                        if (n3 == 1) {
                            if (n2 == 1 || n2 == 0) {
                                s3 = " một";
                            } else {
                                s3 = " mốt";
                            };
                        } else if (n3 == 5 && n2 != 0) {
                            s3 = " lăm";
                        } else {
                            s3 = s09[n3];
                        };

                        if (i > conso.length - 1) {
                            s123 = s1 + s2 + s3;
                        } else {
                            s123 = s1 + s2 + s3 + lop3[lop];
                        };
                    };
                    lop += 1;
                    if (lop > 3) {
                        lop = 1;
                    };
                    docso = docso + s123;
                }
                while (i < conso.length);
                if (docso == "") {
                    kq = "không";
                } else {
                    docso = String(docso);
                    docso = docso.trim();
                    kq = dau + docso.substr(0, 1).toUpperCase() + docso.substr(1, docso.length - 1) + " đồng.";
                };
            };
        } else {
            kq = conso;
        };
        return kq
    }
</script>

</html>