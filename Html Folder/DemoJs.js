var labelOnj = '<label></label>';
var inputObj = '<input type="text" class="default" placeholder="ex) 50, 100, 1000" />';
var inputCostObj = '<input type="text" class="cost-type" placeholder="e.g. Food, Rent, Bills" />';
var removeObj = '<span>Remove</span>'
var incomeObj = $('.additional-income');
var costObj = $('.additional-costs');
var i = 0;
var removeItem;

$(".start").click(function() {
    $('.income').show();
    $('.costs').show();
    return false;
});
$('.add-income').click(function() {
    incomeObj.append('<br/>' + labelOnj + inputObj + removeObj);
    addClassesAndText("income");
    return false;
});
$('.add-cost').click(function() {
    costObj.append('<br/>' + inputCostObj + inputObj + removeObj);
    addClassesAndText("cost");
    return false;
});
$('.additional-income').on('click', "span.remove", function() {
    console.log($(this).attr("class"));
    removeItem = $(this).attr("class").replace("remove item-", "");
    $('.additional-income').children(".lbl-" + removeItem).remove();
    $('.additional-income').children(".input-" + removeItem).remove();
    $(this).prev("br").remove();
    $(this).remove();
    addClassesAndText("income");
});

$('.additional-costs').on('click', "span.remove", function() {
    console.log($(this).attr("class"));
    removeItem = $(this).attr("class").replace("remove item-", "");
    $('.additional-costs').find(".input-" + removeItem).remove();
    $(this).prev("br").remove();
    $(this).remove();
    addClassesAndText("costs");
});

function addClassesAndText(x) {
    if (x == "income") {
        addIncomeText();
        addInputIncomeClass();
        addRemoveIncomeClass();
    } else if (x == "cost") {
        addInputCostClass();
        addRemoveCostClass();
    }
}

$(".calculate").click(function() {
    var totalIncome = 0;
    var totalCosts = 0;

    $('.additional-income').children("input").each(function() {
        if ($(this).val() != "") {
            totalIncome = totalIncome + parseInt($(this).val());
        }
    });
    $('.additional-costs').children("input.default").each(function() {
        if ($(this).val() != "") {
            totalCosts = totalCosts + parseInt($(this).val());
        }
    });

    var totalText = '<span class="close">close</span><p class="bold">Your remaining balance is:</p><br/>';

    if (parseInt((totalIncome - totalCosts)) < 0) {
        $(".total").text(totalIncome - totalCosts);
        $(".total").html(totalText + '<p class="red">-$' + $(".total").text().replace("-", "") + '</p>');
    } else {
        $(".total").html(totalText + '<p class="green">$' + (totalIncome - totalCosts) + '</p>');
    }
    $(".total").show();
});

$(".total").click(function() {
    $(this).hide();
});


function addIncomeText() {
    i = 1;
    $('.additional-income').children("label").each(function() {
        if (i != 1) {
            $(this).text("Income " + i);
            $(this).attr("class", "lbl-" + i);
        }
        i++;
    });
}

function addInputIncomeClass() {
    i = 1;
    $('.additional-income').children("input").each(function() {
        $(this).attr("class", "input input-" + i);
        i++;
    });
}

function addRemoveIncomeClass() {
    i = 2;
    $('.additional-income').children("span").each(function() {
        $(this).attr("class", "remove item-" + i);
        i++;
    });
}

function addInputCostClass() {
    i = 1;
    $('.additional-costs').children("input.default").each(function() {
        $(this).attr("class", "default input-" + i);
        i++;
    });

    i = 1;
    $('.additional-costs').children("input.cost-type").each(function() {
        $(this).attr("class", "cost-type input-" + i);
        i++;
    });
}

function addRemoveCostClass() {
    i = 1;
    $('.additional-costs').children("span").each(function() {
        $(this).attr("class", "remove item-" + i);
        i++;
    });
}
