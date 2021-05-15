$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.button-collapse').sideNav();
    $('.collapsible').collapsible();
    $(".dropdown-button").dropdown();
    $('select').material_select();
    $('ul.tabs').tabs();
    $('.modal-trigger').leanModal();
    $('.timepicker').pickatime({
        darktheme: false,
        donetext: 'Seleccionar',
        twelvehour: false,
        autoclose: false,
        ampmclickable: false
    });
    $('.datepicker').pickadate({
        closeOnSelect: true,
        monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sab'],
        selectMonths: true,
        format: 'yyyy-mm-dd',
        selectYears: 15,
        today: '',
        clear: '',
        close: 'Seleccionar'
    });
    $('.tooltipped').tooltip({delay: 50});

    if (window.location.href.toString().split(window.location.host)[1] === "/admin/classes") {
        var table = $('#example').DataTable({
            paging: false,
            info: false,
            stateSave: true,
            scrollX: true,
            language: {
                zeroRecords: "No hay registros disponibles",
                search: "Buscar"
            },
            dom: '<"left"f>'
        });
    }
    
    if (window.location.href.toString().split(window.location.host)[1] === "/admin/inscriptions") {
        var table = $('#example').DataTable({
            paging: false,
            info: false,
            stateSave: true,
            scrollX: true,
            language: {
                zeroRecords: "No hay registros disponibles",
                search: "Buscar"
            },
            dom: '<"left"f>'
        });

        $('#example tbody').on('click', 'tr', function () {
            var data = table.row(this).data();
            $.ajax({
                type: 'GET',
                url: '/admin/inscriptions/seeInscriptions/' + data[0],
                dataType: 'JSON',
                success: function (data) {
                    $("#inscriptionContent").html("");
                    $.each(data, function (k, v) {
                        var aux = "";
                        if (v['state_id'] === 1) {
                            aux += "<div class='card-panel ptc'>";
                        } else if (v['state_id'] === 2) {
                            aux += "<div class='card-panel ptc'>";
                        } else if (v['state_id'] === 3) {
                            aux += "<div class='card-panel orange'>";
                        } else if (v['state_id'] === 5) {
                            aux += "<div class='card-panel red'>";
                        }
                        aux += "<div class='row'>";
                        aux += "<div class='col l6 m6 s6'>";
                        aux += "<span class='titulo white-text'>Inscripción</span>";
                        aux += "<p class='white-text'>Nombre: " + v['fullName'];
                        aux += "<br>Correo: " + v['email'];
                        aux += "<br>Cuenta: " + v['account'];
                        aux += "<br>Por pagar: $" + v['fullPayment'];
                        aux += "<br>Pagado: $" + v['partialPayment'];
                        aux += "<br>Estado de la inscripción: ";
                        if (v['state_id'] === 1) {
                            aux += "<span class='chip'>Pagado</span>";
                        } else if (v['state_id'] === 2) {
                            aux += "<span class='chip'>Becado</span>";
                        } else if (v['state_id'] === 3) {
                            aux += "<span class='chip'>Paga parcial</span>";
                        } else if (v['state_id'] === 5) {
                            aux += "<span class='chip white grey-text text-darken-4'>Pendiente</span>";
                        }
                        aux += "</p>";
                        aux += "<a class='waves-effect btn white grey-text text-darken-4 confirmPay' data-payment=" + v['fullPayment'] + " data-stateid=1 data-id='" + v['id'] + "' style='cursor: pointer'>PAGO COMPLETO</a> ";
                        aux += "<a class='waves-effect btn white grey-text text-darken-4 confirmPay' data-payment=" + v['fullPayment'] + " data-stateid=3 data-id='" + v['id'] + "' style='cursor: pointer'>PAGO PARCIAL</a> ";
                        aux += "<a class='waves-effect btn white grey-text text-darken-4 confirmPay' data-payment=" + v['fullPayment'] + " data-stateid=2 data-id='" + v['id'] + "' style='cursor: pointer'>BECADO</a>";
                        aux += "</div>";
                        aux += "<div class='col l6 m6 s6'>";
                        aux += "<span class='titulo white-text'>Folio: " + v['id'] + "</span>";
                        aux += "<ul class='collection'>";
                        $.each(v['inscription'], function (k1, v1) {
                            aux += "<li class='collection-item avatar'>";
                            aux += "<p>";
                            aux += v1['course']['name'] + "<br>";
                            aux += "Fecha: " + v1['startDate'] + " al " + v1['endDate'] + "<br>";
                            aux += "Horario: " + v1['startTime'] + " a " + v1['endTime'] + "<br>";
                            aux += "</p>";
                            aux += "</li>";
                        });
                        aux += "</ul>";
                        aux += "</div>";
                        aux += "</div>";
                        aux += "</div>";
                        $('#inscriptionContent').append(aux);
                    });
                    $("#inscriptionContent").show(200);
                }
            });
        });

        $("#inscriptionContent").on('click', '.confirmPay', function () {
            var id = $(this).data("id");
            var state = $(this).data("stateid");
            var payment = $(this).data("payment");
            var aux = "";
            var futureState = state;
            // PAGO COMPLETO
            if (state === 1) {
                futureState = 1;
                aux += "<div id='modal1' class='modal'>";
                aux += "<div class='modal-content'>";
                aux += "<h4>Confirmar inscripción con folio: " + id + "</h4>";
                aux += "Cantidad a confirmar: $" + payment;
                aux += "<div class='input-field'>";
                aux += "<input id='payment' type='number' class='validate'>";
                aux += "<label for='payment'>Ingrese folio del ticket</label>";
                aux += "</div>";
                aux += "</div>";
                aux += "<div class='modal-footer'>";
                aux += "<a id='confirmInscription' style='cursor: pointer' class='modal-action modal-close waves-effect btn white grey-text text-darken-4'>Confirmar</a>";
                aux += "</div>";
                aux += "</div>";
                // BECADO
            } else if (state === 2) {
                futureState = 2;
                aux += "<div id='modal1' class='modal'>";
                aux += "<div class='modal-content'>";
                aux += "<h4>Confirmar inscripción con folio: " + id + "</h4>";
                aux += "<div class='input-field'>";
                aux += "<input id='payment' type='number' class='validate'>";
                aux += "<label for='payment'>Ingrese cantidad pagada</label>";
                aux += "</div>";
                aux += "</div>";
                aux += "<div class='modal-footer'>";
                aux += "<a style='cursor: pointer' class='modal-action modal-close waves-effect waves-green btn-flat'>Confirmar</a>";
                aux += "</div>";
                aux += "</div>";
                // PARCIAL
            } else if (state === 3) {
                futureState = 3;
                aux += "<div id='modal1' class='modal'>";
                aux += "<div class='modal-content'>";
                aux += "<h4>Confirmar inscripción con folio: " + id + "</h4>";
                aux += "<div class='input-field'>";
                aux += "<input id='payment' type='number' class='validate'>";
                aux += "<label for='payment'>Ingrese cantidad pagada</label>";
                aux += "</div>";
                aux += "</div>";
                aux += "<div class='modal-footer'>";
                aux += "<a style='cursor: pointer' class='modal-action modal-close waves-effect waves-green btn-flat'>Confirmar</a>";
                aux += "</div>";
                aux += "</div>";
            }
            $('#modalContent').html(aux);
            $('#modal1').openModal();
            $("#confirmInscription").click(function () {
                var ticket = $("#payment").val();
                $.ajax({
                    type: 'POST',
                    url: 'inscriptions/confirmInscription',
                    dataType: 'JSON',
                    data: {'id': id, 'futureState': futureState, 'ticket': ticket},
                    success: function (data) {
                        if (data === 0) {
                            Materialize.toast("El ticket ya existe", 4000);
                        } else {
                            Materialize.toast("Se ha dado de alta el folio: " + data['id'], 4000);
                            $.ajax({
                                type: 'GET',
                                url: '/admin/inscriptions/seeInscription/' + data['id'],
                                dataType: 'JSON',
                                success: function (data) {
                                    $("#inscriptionContent").html("");
                                    var aux = "";
                                    if (data['state_id'] === 1) {
                                        aux += "<div class='card-panel ptc'>";
                                    } else if (data['state_id'] === 2) {
                                        aux += "<div class='card-panel ptc'>";
                                    } else if (data['state_id'] === 3) {
                                        aux += "<div class='card-panel orange'>";
                                    } else if (data['state_id'] === 5) {
                                        aux += "<div class='card-panel red'>";
                                    }
                                    aux += "<div class='row'>";
                                    aux += "<div class='col l6 m6 s6'>";
                                    aux += "<span class='titulo white-text'>INSCRIPCIÓN CONFIRMADA</span>";
                                    aux += "<p class='white-text'>Nombre: " + data['fullName'];
                                    aux += "<br>Correo: " + data['email'];
                                    aux += "<br>Cuenta: " + data['account'];
                                    aux += "<br>Por pagar: $" + data['fullPayment'];
                                    aux += "<br>Pagado: $" + data['partialPayment'];
                                    aux += "<br>Estado de la inscripción: ";
                                    if (data['state_id'] === 1) {
                                        aux += "<span class='chip'>Pagado</span>";
                                    } else if (data['state_id'] === 2) {
                                        aux += "<span class='chip'>Becado</span>";
                                    } else if (data['state_id'] === 3) {
                                        aux += "<span class='chip'>Paga parcial</span>";
                                    } else if (data['state_id'] === 5) {
                                        aux += "<span class='chip white grey-text text-darken-4'>Pendiente</span>";
                                    }
                                    aux += "</p>";
                                    aux += "</div>";
                                    aux += "<div class='col l6 m6 s6'>";
                                    aux += "<span class='titulo white-text'>Folio: " + data['id'] + "</span>";
                                    aux += "<ul class='collection'>";
                                    $.each(data['inscription'], function (k1, v1) {
                                        aux += "<li class='collection-item avatar'>";
                                        aux += "<p>";
                                        aux += v1['course']['name'] + "<br>";
                                        aux += "Fecha: " + v1['startDate'] + " al " + v1['endDate'] + "<br>";
                                        aux += "Horario: " + v1['startTime'] + " a " + v1['endTime'] + "<br>";
                                        aux += "</p>";
                                        aux += "</li>";
                                    });
                                    aux += "</ul>";
                                    aux += "</div>";
                                    aux += "</div>";
                                    aux += "</div>";
                                    $('#inscriptionContent').append(aux);
                                    $("#inscriptionContent").show(200);
                                }
                            });
                        }

                    }
                });
            });
        });
    }

    $("#usertype").change(function () {
        var tipo = $("#usertype").val();
        if (tipo === '1') {
            $("#accountT").text("Número de cuenta");
            $("#account").removeAttr("disabled");
        } else if (tipo === '2') {
            $("#accountT").text("Número de cuenta o RFC");
            $("#account").removeAttr("disabled");
        } else if (tipo === '3') {
            $("#accountT").text("RFC");
            $("#account").removeAttr("disabled");
        }
    });
    $('.grid').isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });
    $('.filter').click(function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter: filterValue});
    });
    $('#courseSearch').keyup(function () {
        var filterValue = escapeRegExp($('#courseSearch').val().toLowerCase());
        filterFunc = function () {
            var name = $(this).find('.name').text().toLowerCase();
            return name.match(filterValue);
        };
        $grid.isotope({filter: filterFunc});
    });
    function escapeRegExp(str) {
        return str.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&");
    }

    var $grid = $('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true
    });

    $grid.imagesLoaded().progress(function () {
        $grid.masonry();
    });

    var html1 = "<span class='titulo white-text'>Mis cursos</span><ul class='collection' id='cartElement'>";
    var html2 = "</ul>";
    var functionAjax = function (k, v) {
        var aux = "<li class='collection-item avatar' id=" + v['id'] + ">";
        aux += "<p>";
        aux += v['name'] + "<br>";
        aux += "Fecha: " + v['options']['date'] + "<br>";
        aux += "Horario: " + v['options']['time'] + "<br>";
        aux += "Precio: $" + v['subtotal'];
        aux += "</p>";
        aux += "<a style='cursor: pointer' class='secondary-content deleteCart' data-url='/deleteCart' data-id=" + v['id'] + "><i class='material-icons'>delete_forever</i></a>";
        aux += "</li>";
        $('#cartElement').append(aux);
    };

    $("#buttonConfirmCart").click(function () {
        var url = $(this).data("url");
        $.ajax({
            type: 'POST',
            url: url,
            dataType: 'JSON',
            data: {'id': 0},
            success: function (data) {
                $('#confirmCart').html("");
                $.each(data['content'], function (k, v) {
                    var aux = "<li class='collection-item avatar'>";
                    aux += "<p>";
                    aux += v['name'] + "<br>";
                    aux += "Fecha: " + v['options']['date'] + "<br>";
                    aux += "Horario: " + v['options']['time'] + "<br>";
                    aux += "Precio: $" + v['subtotal'];
                    aux += "</p>";
                    aux += "</li>";
                    $('#confirmCart').append(aux);
                });
                $('#totalCart').html("Subtotal: $" + data['total']);
                $('#totalCart').append("<br>Descuento: $" + data['desc']);
                $('#totalCart').append("<br>Total: $" + (data['total'] - data['desc']));
            }
        });
    });
    $(".addCart").click(function () {
        var id = $(this).data("id");
        var url = $(this).data("url");
        $.ajax({
            type: 'POST',
            url: url,
            dataType: 'JSON',
            data: {'id': id},
            success: function (data) {
                if (data !== 0) {
                    $("#cartContent").html(html1);
                    $.each(data, functionAjax);
                    $("#cartContent").append(html2);
                    $("#cartContent").show(200);
                    $("#myCourses").show(200);
                    $("#buttonConfirmCart").show(100);
                    Materialize.toast('Curso agregado', 4000); // 4000 is the duration of the toast
                } else {
                    Materialize.toast('El curso ya se encuentra agregado', 4000); // 4000 is the duration of the toast
                }
            }
        });
    });

    $("#cartContent").on('click', '.deleteCart', function () {
        var id = $(this).data("id");
        var url = $(this).data("url");
        $.ajax({
            type: 'POST',
            url: url,
            dataType: 'JSON',
            data: {'id': id},
            success: function (data) {
                if (data !== 0) {
                    if (data.length === 0) {
                        $("#cartContent").html("<span class='titulo white-text'>Mis cursos</span><ul class='collection'><li class='collection-item'>Sin cursos</li></ul>");
                        $("#buttonConfirmCart").hide(200);
                    } else {
                        $("#cartContent").html(html1);
                        $.each(data, functionAjax);
                        $("#cartContent").append(html2);
                        $("#cartContent").show(200);
                        $("#myCourses").show(200);
                    }
                    Materialize.toast('Curso eliminado', 4000); // 4000 is the duration of the toast
                }
            }
        });
    });

    if (window.location.href.toString().split(window.location.host)[1] === "/cursos") {
        $.ajax({
            type: 'GET',
            url: '/seeCart',
            dataType: 'JSON',
            success: function (data) {
                if (data !== 0) {
                    $("#cartContent").html(html1);
                    $.each(data, functionAjax);
                    $("#cartContent").append(html2);
                    $("#cartContent").show(200);
                    $("#myCourses").show(200);
                }
            }
        });
    }

});
!function (t, e) {
    "function" == typeof define && define.amd ? define("ev-emitter/ev-emitter", e) : "object" == typeof module && module.exports ? module.exports = e() : t.EvEmitter = e()
}(this, function () {
    function t() {}
    var e = t.prototype;
    return e.on = function (t, e) {
        if (t && e) {
            var i = this._events = this._events || {}, n = i[t] = i[t] || [];
            return -1 == n.indexOf(e) && n.push(e), this
        }
    }, e.once = function (t, e) {
        if (t && e) {
            this.on(t, e);
            var i = this._onceEvents = this._onceEvents || {}, n = i[t] = i[t] || [];
            return n[e] = !0, this
        }
    }, e.off = function (t, e) {
        var i = this._events && this._events[t];
        if (i && i.length) {
            var n = i.indexOf(e);
            return -1 != n && i.splice(n, 1), this
        }
    }, e.emitEvent = function (t, e) {
        var i = this._events && this._events[t];
        if (i && i.length) {
            var n = 0, o = i[n];
            e = e || [];
            for (var r = this._onceEvents && this._onceEvents[t]; o; ) {
                var s = r && r[o];
                s && (this.off(t, o), delete r[o]), o.apply(this, e), n += s ? 0 : 1, o = i[n]
            }
            return this
        }
    }, t
}), function (t, e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["ev-emitter/ev-emitter"], function (i) {
        return e(t, i)
    }) : "object" == typeof module && module.exports ? module.exports = e(t, require("ev-emitter")) : t.imagesLoaded = e(t, t.EvEmitter)
}(window, function (t, e) {
    function i(t, e) {
        for (var i in e)
            t[i] = e[i];
        return t
    }
    function n(t) {
        var e = [];
        if (Array.isArray(t))
            e = t;
        else if ("number" == typeof t.length)
            for (var i = 0; i < t.length; i++)
                e.push(t[i]);
        else
            e.push(t);
        return e
    }
    function o(t, e, r) {
        return this instanceof o ? ("string" == typeof t && (t = document.querySelectorAll(t)), this.elements = n(t), this.options = i({}, this.options), "function" == typeof e ? r = e : i(this.options, e), r && this.on("always", r), this.getImages(), h && (this.jqDeferred = new h.Deferred), void setTimeout(function () {
            this.check()
        }.bind(this))) : new o(t, e, r)
    }
    function r(t) {
        this.img = t
    }
    function s(t, e) {
        this.url = t, this.element = e, this.img = new Image
    }
    var h = t.jQuery, a = t.console;
    o.prototype = Object.create(e.prototype), o.prototype.options = {}, o.prototype.getImages = function () {
        this.images = [], this.elements.forEach(this.addElementImages, this)
    }, o.prototype.addElementImages = function (t) {
        "IMG" == t.nodeName && this.addImage(t), this.options.background === !0 && this.addElementBackgroundImages(t);
        var e = t.nodeType;
        if (e && d[e]) {
            for (var i = t.querySelectorAll("img"), n = 0; n < i.length; n++) {
                var o = i[n];
                this.addImage(o)
            }
            if ("string" == typeof this.options.background) {
                var r = t.querySelectorAll(this.options.background);
                for (n = 0; n < r.length; n++) {
                    var s = r[n];
                    this.addElementBackgroundImages(s)
                }
            }
        }
    };
    var d = {1: !0, 9: !0, 11: !0};
    return o.prototype.addElementBackgroundImages = function (t) {
        var e = getComputedStyle(t);
        if (e)
            for (var i = /url\((['"])?(.*?)\1\)/gi, n = i.exec(e.backgroundImage); null !== n; ) {
                var o = n && n[2];
                o && this.addBackground(o, t), n = i.exec(e.backgroundImage)
            }
    }, o.prototype.addImage = function (t) {
        var e = new r(t);
        this.images.push(e)
    }, o.prototype.addBackground = function (t, e) {
        var i = new s(t, e);
        this.images.push(i)
    }, o.prototype.check = function () {
        function t(t, i, n) {
            setTimeout(function () {
                e.progress(t, i, n)
            })
        }
        var e = this;
        return this.progressedCount = 0, this.hasAnyBroken = !1, this.images.length ? void this.images.forEach(function (e) {
            e.once("progress", t), e.check()
        }) : void this.complete()
    }, o.prototype.progress = function (t, e, i) {
        this.progressedCount++, this.hasAnyBroken = this.hasAnyBroken || !t.isLoaded, this.emitEvent("progress", [this, t, e]), this.jqDeferred && this.jqDeferred.notify && this.jqDeferred.notify(this, t), this.progressedCount == this.images.length && this.complete(), this.options.debug && a && a.log("progress: " + i, t, e)
    }, o.prototype.complete = function () {
        var t = this.hasAnyBroken ? "fail" : "done";
        if (this.isComplete = !0, this.emitEvent(t, [this]), this.emitEvent("always", [this]), this.jqDeferred) {
            var e = this.hasAnyBroken ? "reject" : "resolve";
            this.jqDeferred[e](this)
        }
    }, r.prototype = Object.create(e.prototype), r.prototype.check = function () {
        var t = this.getIsImageComplete();
        return t ? void this.confirm(0 !== this.img.naturalWidth, "naturalWidth") : (this.proxyImage = new Image, this.proxyImage.addEventListener("load", this), this.proxyImage.addEventListener("error", this), this.img.addEventListener("load", this), this.img.addEventListener("error", this), void(this.proxyImage.src = this.img.src))
    }, r.prototype.getIsImageComplete = function () {
        return this.img.complete && void 0 !== this.img.naturalWidth
    }, r.prototype.confirm = function (t, e) {
        this.isLoaded = t, this.emitEvent("progress", [this, this.img, e])
    }, r.prototype.handleEvent = function (t) {
        var e = "on" + t.type;
        this[e] && this[e](t)
    }, r.prototype.onload = function () {
        this.confirm(!0, "onload"), this.unbindEvents()
    }, r.prototype.onerror = function () {
        this.confirm(!1, "onerror"), this.unbindEvents()
    }, r.prototype.unbindEvents = function () {
        this.proxyImage.removeEventListener("load", this), this.proxyImage.removeEventListener("error", this), this.img.removeEventListener("load", this), this.img.removeEventListener("error", this)
    }, s.prototype = Object.create(r.prototype), s.prototype.check = function () {
        this.img.addEventListener("load", this), this.img.addEventListener("error", this), this.img.src = this.url;
        var t = this.getIsImageComplete();
        t && (this.confirm(0 !== this.img.naturalWidth, "naturalWidth"), this.unbindEvents())
    }, s.prototype.unbindEvents = function () {
        this.img.removeEventListener("load", this), this.img.removeEventListener("error", this)
    }, s.prototype.confirm = function (t, e) {
        this.isLoaded = t, this.emitEvent("progress", [this, this.element, e])
    }, o.makeJQueryPlugin = function (e) {
        e = e || t.jQuery, e && (h = e, h.fn.imagesLoaded = function (t, e) {
            var i = new o(this, t, e);
            return i.jqDeferred.promise(h(this))
        })
    }, o.makeJQueryPlugin(), o
});