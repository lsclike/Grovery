var frozen = document.getElementById('frozen');
frozen.style.zindex=0;
var fresh = document.getElementById('fresh');
fresh.style.zindex=0;
var beverage = document.getElementById('beverage');
fresh.style.zindex=0;
var home_health = document.getElementById('home_health');
home_health.style.zindex=0;
var pet_food= document.getElementById('pet_food');
pet_food.style.zindex=0;
var l3_frozen = document.getElementById("l3_frozen");
l3_frozen.style.zindex = 5;
var l3_milk = document.getElementById("l3_milk");
l3_milk.style.zindex = 5;
var l3_other = document.getElementById("l3_other");
l3_other.style.zindex = 5;
var l3_cheddar = document.getElementById("l3_cheddar");
l3_cheddar.style.zindex = 5;
var l3_coffee = document.getElementById("l3_coffee");
l3_coffee.style.zindex = 5;
var l3_tea = document.getElementById("l3_tea");
l3_tea.style.zindex = 5;
var l3_panadol = document.getElementById("l3_panadol");
l3_panadol.style.zindex = 5;
var l3_garbage = document.getElementById("l3_garbage");
l3_garbage.style.zindex = 5;
var l3_dog_food = document.getElementById("l3_dog_food");
l3_dog_food.style.zindex = 5;
var l1_foods = [frozen,fresh,beverage,home_health,pet_food];
var l3_foods = [l3_frozen,l3_milk,l3_other,l3_cheddar,l3_coffee,l3_tea,l3_panadol,l3_garbage,l3_dog_food];
function expandContent(theID) {
    if (theID == 1) {
        closeL2();
        closeL3();
        frozen.style.zindex = 5;
        frozen.style.visibility = "visible";
    }
    if (theID == 2) {
        closeL2();
        closeL3();
        fresh.style.zindex = 5;
        fresh.style.visibility = "visible";
    }
    if (theID == 3) {
        closeL2();
        closeL3();
        beverage.style.zindex = 5;
        beverage.style.visibility = "visible";
    }
    if (theID== 4) {
        closeL2();
        closeL3();
        home_health.style.zindex = 5;
        home_health.style.visibility = "visible";
    }
    if (theID == 5) {
        closeL2();
        closeL3();
        pet_food.style.zindex = 5;
        pet_food.style.visibility = "visible";
    }
    if (theID == 6){
        closeL3();
        l3_frozen.style.zIndex=10;
        l3_frozen.style.visibility = 'visible';
    }
    if (theID == 7){
        closeL3();
        l3_milk.style.zIndex=10;
        l3_milk.style.visibility = 'visible';
    }
    if (theID == 8){
        closeL3();
        l3_other.style.zIndex=10;
        l3_other.style.visibility = 'visible';
    }
    if (theID == 9){
        closeL3();
    }

    if (theID == 10){
        closeL3();
        l3_cheddar.style.zIndex=10;
        l3_cheddar.style.visibility = 'visible';
    }
    if (theID == 11){
        closeL3();
        l3_coffee.style.zIndex=10;
        l3_coffee.style.visibility = 'visible';
    }
    if (theID == 12){
        closeL3();
        l3_tea.style.zIndex=10;
        l3_tea.style.visibility = 'visible';
    }
    if (theID == 13){
        closeL3();
        l3_panadol.style.zIndex=10;
        l3_panadol.style.visibility = 'visible';
    }
    if (theID == 14){
        closeL3();
        l3_garbage.style.zIndex=10;
        l3_garbage.style.visibility = 'visible';
    }
    if (theID == 15){
        closeL3();
        l3_dog_food.style.zIndex=10;
        l3_dog_food.style.visibility = 'visible';
    }
}

function closeL2(){
    for (i = 0; i < l1_foods.length; i++) {
        l1_foods[i].style.visibility = "hidden";
    }
}
function closeL3() {
    for (i = 0; i < l3_foods.length; i++) {
        l3_foods[i].style.visibility = "hidden";
    }
}