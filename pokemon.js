var damage;
function calculateDamage(yourType, opponentType, attack, defense){
 
// fire > grass
// fire < water
// fire = electric
// water < grass
// water < electric
// grass = electric
// ------------------------fire--------------------------------

    if((yourType == "fire" ) && (opponentType == "electric"||opponentType == "grass"||opponentType == "water"||opponentType == "fire")){
        switch(opponentType){
            case "electric":
                damage = 50* (attack/defense)*1;
                console.log(damage);
                break;
            case "grass":
                damage = 50* (attack/defense)*2;
                console.log(damage);
                break;
            case "water":
                damage = 50* (attack/defense)*0.5;
                console.log(damage);
                break;
                default:
                    damage = 50*(attack/defense)*0.5;
                    console.log(damage);
                    break;
        }
    }
// ---------------------------water------------------------------
    else if((yourType == "water") && (opponentType == "electric"||opponentType == "grass"||opponentType == "fire"||opponentType == "water")){
    switch(opponentType){
        case "electric":
            damage = 50* (attack/defense)*0.5;
            console.log(damage);
            break;
        case "grass":
            damage = 50* (attack/defense)*0.5;
            console.log(damage);
            break;
        case "fire":
            damage = 50* (attack/defense)*2;
            console.log(damage);
            break;
            default:
                damage = 50*(attack/defense)*0.5;
                console.log(damage);
                break;
    }
    
}
// ------------------------------grass--------------------------------
else if((yourType == "grass") && (opponentType == "electric"||opponentType == "water"||opponentType == "fire"||opponentType == "grass")){
    switch(opponentType){
        case "electric":
            damage = 50* (attack/defense)*1;
            console.log(damage);
            break;
        case "water":
            damage = 50* (attack/defense)*2;
            console.log(damage);
            break;
        case "fire":
            damage = 50* (attack/defense)*0.5;
            console.log(damage);
            break;
        default:
            damage = 50*(attack/defense)*0.5;
            console.log(damage);
            break;
    }
    
}
// ---------------------------------------electric----------------------
else if((yourType == "electric") && (opponentType == "grass"||opponentType == "water"||opponentType == "fire"||opponentType == "electric")){
    switch(opponentType){
        case "grass":
            damage = 50* (attack/defense)*1;
            console.log(damage);
            break;
        case "water":
            damage = 50* (attack/defense)*2;
            console.log(damage);
            break;
        case "fire":
            damage = 50* (attack/defense)*1;
            console.log(damage);
            break;
        default:
            damage = 50*(attack/defense)*0.5;
            console.log(damage);
            break;
    }
    
}
}
calculateDamage("fire", "water", 100, 100);
calculateDamage("grass", "water", 100, 100);
calculateDamage("electric", "fire", 100, 100);
calculateDamage("grass", "electric", 57, 19);
calculateDamage("grass", "water", 40, 40);
calculateDamage("grass", "fire", 35, 5);
calculateDamage("fire", "electric", 10, 2);