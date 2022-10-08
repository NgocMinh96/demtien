<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ĐẾM TIỀN</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
            letter-spacing: 1px;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            font-size: 24px;
            background: rgb(44, 48, 52);
            background: radial-gradient(circle, rgba(44, 48, 52, 1) 0%, rgba(33, 37, 41, 1) 100%);
            margin-bottom: 0px;
        }

        input:focus {
            border: #f6b93b 1px solid;
            box-shadow: inset 0 0 0.5em 0 #f6b93b, 0 0 0.5em 0 #f6b93b !important;
            transition: all 0.25s
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

        input::placeholder {
            color: white !important;
        }

        tr td {
            background: #34495e;
            font-weight: 500;
            text-align: left;
            vertical-align: middle !important;
        }

        tr td:hover {
            text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3), 0 0 0.45em currentColor;
        }

        thead th {
            color: #eb4d4b;
            padding: 5px !important;

        }

        thead th:hover {
            text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3), 0 0 0.45em currentColor;
        }

        table {
            box-shadow: 0 0 0.2em 0 #f6b93b, 0 0 0.2em 0 #f6b93b;
        }

        .section-content {
            min-height: 95vh;
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
            border: #f6b93b 1px solid;
            text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3), 0 0 0.45em currentColor;
            box-shadow: inset 0 0 0.2em 0 #f6b93b, 0 0 0.2em 0 #f6b93b;
        }

        .btn-dark:hover {
            color: #f6b93b;
            border: #f6b93b 1px solid;
            text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3), 0 0 0.45em currentColor;
            box-shadow: inset 0 0 0.5em 0 #f6b93b, 0 0 0.5em 0 #f6b93b;
        }

        @media (max-width: 575px) {
            body {
                font-size: 20px;
            }

            .form-control {
                padding: 0.275rem 0.25rem;
            }
        }
    </style>
</head>

<?php
$list_menhgia = [
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
?>

<body>
    <div class="section-content container pt-4">
        <div class="row">
            <div class="col-lg-1">
                <div class="text-center">
                    <button id="clear" class="btn btn-dark mb-3">
                        <span>ESC</span>
                    </button>
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
                        foreach ($list_menhgia as $key => $value) {
                            echo '<tr>
                                <td class="menhgia text-right">' . $value . '</td>
                                <td><input type="number" name="menhgia" class="form-control" id="' . $key . '" data-type="' . $key . '" placeholder="0"></td>
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
                                <input type="number" name="c_thu" class="form-control" id="c_thu" placeholder="0">
                                <span class="tienchu text-left" id="text-thu"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="menhgia">Nhận</td>
                            <td>
                                <span id="c-nhan">0</span></br>
                                <span class="tienchu text-left" id="text-nhan"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="menhgia">Thừa</td>
                            <td>
                                <span id="c-thua">0</span></br>
                                <span class="tienchu text-left" id="text-thua"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="text-center container">
        <p class="fw-bold" style="color: #e63946; font-size: 0.75rem">Author:<span class="text-warning fw-normal ms-1">Nguyễn Ngọc Minh - 0936454609</span></p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/redux/4.0.5/redux.min.js"></script>
</body>

<script>
    $('input[type="number"]').on('keypress', function(e) {
        if (e.which != 8 && e.which != 0 && e.which < 48 || e.which > 57) {
            e.preventDefault();
        }
    })
    $('input[name="menhgia"]').bind('keyup change', function(e) {
        if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
            var val = $(this).val()
        }
        val = $(this).val()
        var type = 'update_' + $(this).data('type');
        updateStore.dispatch({
            type: type,
            soto: val
        });
    })
    $('input[name="c_thu"]').bind("keyup change", function(e) {
        if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
            var val = $(this).val()
        }
        val = $(this).val()
        updateStore.dispatch({
            type: 'update_thu',
            soto: val
        });
    })
    $('input').keydown(function(e) {
        var index = $('input').index(this);
        if (e.which === 13) {
            index = index + 1;
        } else if (e.which === 38) {
            e.preventDefault();
            index = index - 1;
        } else if (e.which === 40) {
            e.preventDefault();
            index = index + 1;
        }
        $('input').eq(index).focus();
    });

    function clear() {
        $('input[name="menhgia"]').val('')
        $('input[name="c_thu"]').val('')
        updateStore.dispatch({
            type: 'clear'
        });
        $('#c500').focus();
    }

    $('#clear').click(function() {
        clear()
    })

    document.onkeydown = function(e) {
        evt = e || window.event;
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
                st_500 = '',
                st_200 = '',
                st_100 = '',
                st_50 = '',
                st_20 = '',
                st_10 = '',
                st_5 = '',
                st_2 = '',
                st_1 = '',
        } = actions;

        switch (actions.type) {
            case 'update_thu':
                return Object.assign({}, state, {
                    c_thu: actions.soto
                });
            case 'update_c500':
                return Object.assign({}, state, {
                    st_500: actions.soto
                });
            case 'update_c200':
                return Object.assign({}, state, {
                    st_200: actions.soto
                });
            case 'update_c100':
                return Object.assign({}, state, {
                    st_100: actions.soto
                });
            case 'update_c50':
                return Object.assign({}, state, {
                    st_50: actions.soto
                });
            case 'update_c20':
                return Object.assign({}, state, {
                    st_20: actions.soto
                });
            case 'update_c10':
                return Object.assign({}, state, {
                    st_10: actions.soto
                });
            case 'update_c5':
                return Object.assign({}, state, {
                    st_5: actions.soto
                });
            case 'update_c2':
                return Object.assign({}, state, {
                    st_2: actions.soto
                });
            case 'update_c1':
                return Object.assign({}, state, {
                    c1: actions.soto
                });
            case 'clear':
                return Object.assign({}, state, {
                    st_500: 0,
                    st_200: 0,
                    st_100: 0,
                    st_50: 0,
                    st_20: 0,
                    st_10: 0,
                    st_5: 0,
                    st_2: 0,
                    st_1: 0,
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
        var st_500 = ('st_500' in cashs) ? cashs['st_500'] : 0;
        var st_200 = ('st_200' in cashs) ? cashs['st_200'] : 0;
        var st_100 = ('st_100' in cashs) ? cashs['st_100'] : 0;
        var st_50 = ('st_50' in cashs) ? cashs['st_50'] : 0;
        var st_20 = ('st_20' in cashs) ? cashs['st_20'] : 0;
        var st_10 = ('st_10' in cashs) ? cashs['st_10'] : 0;
        var st_5 = ('st_5' in cashs) ? cashs['st_5'] : 0;
        var st_2 = ('st_2' in cashs) ? cashs['st_2'] : 0;
        var st_1 = ('st_1' in cashs) ? cashs['st_1'] : 0;

        c_nhan = (500000 * st_500) +
            (200000 * st_200) +
            (100000 * st_100) +
            (50000 * st_50) +
            (20000 * st_20) +
            (10000 * st_10) +
            (5000 * st_5) +
            (2000 * st_2) +
            (1000 * st_1)

        c_thua = c_nhan - c_thu

        function formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
        }

        $('#c-nhan').html(formatNumber(c_nhan))
        $('#c-thua').html(formatNumber(c_thua))

        $('#text-thu').html(chuyenso(c_thu))
        $('#text-nhan').html(chuyenso(c_nhan))
        $('#text-thua').html(chuyenso(c_thua))
    }

    function chuyenso(conso) {
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