var effects = {
    fire : {
      fire : 0.5,
      grass : 2,
      water : 0.5,
      electric : 1
    },
    grass : {
      fire : 0.5,
      grass : 0.5,
      water : 2,
      electric : 1
    },
    water : {
      fire : 2,
      grass : 0.5,
      water : 0.5,
      electric : 0.5
    },
    electric : {
      fire : 1,
      grass : 1,
      water : 2,
      electric : 0.5
    }
  };
  
  function calculateDamage(yourType, opponentType, attack, defense){
    console.log(Math.ceil(50 * (attack/defense) * effects[yourType][opponentType]));
  }
calculateDamage("fire", "water", 100, 100);
calculateDamage("grass", "water", 100, 100);
calculateDamage("electric", "fire", 100, 100);
calculateDamage("grass", "electric", 57, 19);
calculateDamage("grass", "water", 40, 40);
calculateDamage("grass", "fire", 35, 5);
calculateDamage("fire", "electric", 10, 2);