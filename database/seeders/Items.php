<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class Items extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            "cards" => [
                [
                    "vnum" => 901,
                    "name" => "Warrior",
                    "classes" => "Swordsman",
                    "slot" => "card",
                ],
                [
                    "vnum" => 902,
                    "name" => "Ninja",
                    "classes" => "Swordsman",
                    "slot" => "card",
                ],
                [
                    "vnum" => 909,
                    "name" => "Crusader",
                    "classes" => "Swordsman",
                    "slot" => "card",
                ],
                [
                    "vnum" => 910,
                    "name" => "Berserker",
                    "classes" => "Swordsman",
                    "slot" => "card",
                ],
                [
                    "vnum" => 2544,
                    "name" => "Gladiator",
                    "classes" => "Swordsman",
                    "slot" => "card",
                ],
                [
                    "vnum" => 2588,
                    "name" => "Battle Monk",
                    "classes" => "Swordsman",
                    "slot" => "card",
                ],
                [
                    "vnum" => 2654,
                    "name" => "Death Reaper",
                    "classes" => "Swordsman",
                    "slot" => "card",
                ],
                [
                    "vnum" => 2706,
                    "name" => "Renegade",
                    "classes" => "Swordsman",
                    "slot" => "card",
                ],
                [
                    "vnum" => 4496,
                    "name" => "Waterfall Berserker",
                    "classes" => "Swordsman",
                    "slot" => "card",
                ],
                [
                    "vnum" => 903,
                    "name" => "Ranger",
                    "classes" => "Archer",
                    "slot" => "card",
                ],
                [
                    "vnum" => 904,
                    "name" => "Assassin",
                    "classes" => "Archer",
                    "slot" => "card",
                ],
                [
                    "vnum" => 911,
                    "name" => "Destroyer",
                    "classes" => "Archer",
                    "slot" => "card",
                ],
                [
                    "vnum" => 912,
                    "name" => "Wild Keeper",
                    "classes" => "Archer",
                    "slot" => "card",
                ],
                [
                    "vnum" => 2545,
                    "name" => "Fire Cannoneer",
                    "classes" => "Archer",
                    "slot" => "card",
                ],
                [
                    "vnum" => 2589,
                    "name" => "Scout",
                    "classes" => "Archer",
                    "slot" => "card",
                ],
                [
                    "vnum" => 2655,
                    "name" => "Demon Hunter",
                    "classes" => "Archer",
                    "slot" => "card",
                ],
                [
                    "vnum" => 2707,
                    "name" => "Avenging Angel",
                    "classes" => "Archer",
                    "slot" => "card",
                ],
                [
                    "vnum" => 4494,
                    "name" => "Sunchaser",
                    "classes" => "Archer",
                    "slot" => "card",
                ],
                [
                    "vnum" => 905,
                    "name" => "Red Magician",
                    "classes" => "Sorcerer",
                    "slot" => "card",
                ],
                [
                    "vnum" => 906,
                    "name" => "Holy Magician",
                    "classes" => "Sorcerer",
                    "slot" => "card",
                ],
                [
                    "vnum" => 913,
                    "name" => "Blue Magician",
                    "classes" => "Sorcerer",
                    "slot" => "card",
                ],
                [
                    "vnum" => 914,
                    "name" => "Dark Gunner",
                    "classes" => "Sorcerer",
                    "slot" => "card",
                ],
                [
                    "vnum" => 2546,
                    "name" => "Vulcano",
                    "classes" => "Sorcerer",
                    "slot" => "card",
                ],
                [
                    "vnum" => 2590,
                    "name" => "Tide Lord",
                    "classes" => "Sorcerer",
                    "slot" => "card",
                ],
                [
                    "vnum" => 2656,
                    "name" => "Seer",
                    "classes" => "Sorcerer",
                    "slot" => "card",
                ],
                [
                    "vnum" => 2708,
                    "name" => "Archmage",
                    "classes" => "Sorcerer",
                    "slot" => "card",
                ],
                [
                    "vnum" => 4497,
                    "name" => "Voodoo Prist",
                    "classes" => "Sorcerer",
                    "slot" => "card",
                ],
                [
                    "vnum" => 908,
                    "name" => "Jajamaru",
                    "slot" => "card",
                ],
                [
                    "vnum" => 4405,
                    "name" => "Angler",
                    "slot" => "card",
                ],
                [
                    "vnum" => 4440,
                    "name" => "Chef",
                    "slot" => "card",
                ],
                [
                    "vnum" => 900,
                    "name" => "Pyjama",
                    "slot" => "card",
                ],
                [
                    "vnum" => 907,
                    "name" => "Chicken",
                    "slot" => "card",
                ],
                [
                    "vnum" => 915,
                    "name" => "Pirate",
                    "slot" => "card",
                ],
                [
                    "vnum" => 4110,
                    "name" => "Wedding",
                    "slot" => "card",
                ],
                [
                    "vnum" => 4048,
                    "name" => "Draconic Fist",
                    "classes" => "Martial Artist",
                    "slot" => "card",
                ],
                [
                    "vnum" => 4093,
                    "name" => "Mystic Arts",
                    "classes" => "Martial Artist",
                    "slot" => "card",
                ],
                [
                    "vnum" => 4126,
                    "name" => "Master Wolf",
                    "classes" => "Martial Artist",
                    "slot" => "card",
                ],
                [
                    "vnum" => 4151,
                    "name" => "Demon Warrior",
                    "classes" => "Martial Artist",
                    "slot" => "card",
                ],
            ],
            "fairys" => [
                [
                    "vnum" => "256",
                    "name" => "Grumbly Chicky",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "254",
                    "name" => "Little Chick",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "255",
                    "name" => "Dancing Chicky",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "920",
                    "name" => "Red Magical Fairy",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "800",
                    "name" => "Fire Fairy",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "800",
                    "name" => "Fire Fairy (30%)",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "274",
                    "name" => "Sellaim",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "274",
                    "name" => "Grown Sellaim",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "987",
                    "name" => "Elkaim",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "2879",
                    "name" => "Zenas (Fire)",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "2880",
                    "name" => "Erenia (Fire)",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "2881",
                    "name" => "Fernon (Fire)",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "801",
                    "name" => "Water Fairy",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "801",
                    "name" => "Water Fairy (30%)",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "275",
                    "name" => "Woondine",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "275",
                    "name" => "Grown Woondine",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "988",
                    "name" => "Ladine",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "2879",
                    "name" => "Zenas (Water)",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "2880",
                    "name" => "Erenia (Water)",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "2881",
                    "name" => "Fernon (Water)",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "804",
                    "name" => "Solaris",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "425",
                    "name" => "Azuris",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "802",
                    "name" => "Light Fairy",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "802",
                    "name" => "Light Fairy (30%)",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "276",
                    "name" => "Eperial",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "276",
                    "name" => "Grown Eperial",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "989",
                    "name" => "Rumial",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "2879",
                    "name" => "Zenas (Light)",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "2880",
                    "name" => "Erenia (Light)",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "2881",
                    "name" => "Fernon (Light)",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "803",
                    "name" => "Shadow Fairy",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "803",
                    "name" => "Shadow Fairy (30%)",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "277",
                    "name" => "Turik",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "277",
                    "name" => "Grown Turik",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "993",
                    "name" => "Varik",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "2879",
                    "name" => "Zenas (Shadow)",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "2880",
                    "name" => "Erenia (Shadow)",
                    "slot" => "fairy"
                ],
                [
                    "vnum" => "2881",
                    "name" => "Fernon (Shadow)",
                    "slot" => "fairy"
                ],
            ],
            "headband" => [
                [
                    "vnum" => "200",
                    "name" => "Headband",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "204",
                    "name" => "Hippo Hat",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "337",
                    "name" => "Cat Hat",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "338",
                    "name" => "Donkey Hat",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "339",
                    "name" => "Cowboy Hat",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "340",
                    "name" => "Monkey Hat",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "341",
                    "name" => "Antelope Horn Hat",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "342",
                    "name" => "Morning Glory Hat",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "343",
                    "name" => "Penguin Hat",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "344",
                    "name" => "Old Gentleman's Hat",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "345",
                    "name" => "Big Ear Hairband",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "346",
                    "name" => "Flower Vase Hat",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "426",
                    "name" => "Knight Helmet",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "428",
                    "name" => "Wig",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "429",
                    "name" => "Spiky Hairstyle",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "441",
                    "name" => "Colourful Wig",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "442",
                    "name" => "Rare Spiky Hairstyle",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "215",
                    "name" => "Antler Hat",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "216",
                    "name" => "Plunger Hat",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "217",
                    "name" => "Head Gear",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "218",
                    "name" => "Feelers",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "219",
                    "name" => "Oracle's Headband",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "220",
                    "name" => "Funny Fish Hat",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "221",
                    "name" => "Beanie Hat",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "222",
                    "name" => "Water Buffalo Horn",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "2958",
                    "name" => "White Witch Laurena's Disguise",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "2701",
                    "name" => "Laurena's Witch Hat",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "2904",
                    "name" => "Dragon Wing Decoration",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "985",
                    "name" => "Headband of the Unknown Hero",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "894",
                    "name" => "Master Robber's Hat",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "917",
                    "name" => "Sand Spirit's Protective Helmet",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "917",
                    "name" => "Wind Spirit's Protective Helmet",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "894",
                    "name" => "Desert Robbers' Protective Helmet",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "917",
                    "name" => "Merchant Protective Helmet",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "894",
                    "name" => "Newcomer Robbers' Headband",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "2657",
                    "name" => "Caligor's Golden Horn",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "893",
                    "name" => "Commander's Turban",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "893",
                    "name" => "Great Leader's Turban",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "2948",
                    "name" => "Dragonrider's Helm",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "2429",
                    "name" => "Lava Ghost Helmet",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "2430",
                    "name" => "Flame Giant Helmet",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "2781",
                    "name" => "Sealed Heavenly Helmet",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "2782",
                    "name" => "Sealed Hellord Helmet",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "2793",
                    "name" => "Sealed Heavenly Leather Hat",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "2795",
                    "name" => "Sealed Hellord Leather Hat",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "2794",
                    "name" => "Sealed Heavenly Headband",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "2796",
                    "name" => "Sealed Hellord Headband",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "2791",
                    "name" => "Erenia's Crafted Horn",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "2930",
                    "name" => "Jennifer's Feathered Hat",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "4049",
                    "name" => "Zenas' Divine Ring",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "4196",
                    "name" => "Ancient Beast Helmet",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "4197",
                    "name" => "Ceremonial Helmet",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "2822",
                    "name" => "Shares' Steel Helm",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "2823",
                    "name" => "Glacernon Leather Hat",
                    "slot" => "headband"
                ],
                [
                    "vnum" => "2824",
                    "name" => "Mukraju's Circlet",
                    "slot" => "headband"
                ]
            ],
            "mask" => [
                [
                    "vnum" => "361",
                    "name" => "Fierce Mask A",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "362",
                    "name" => "Fierce Mask B",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "363",
                    "name" => "Fierce Mask C",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "366",
                    "name" => "Silence Mask A",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "367",
                    "name" => "Silence Mask B",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "368",
                    "name" => "Silence Mask C",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "371",
                    "name" => "Abyssal Eye Bandage A",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "372",
                    "name" => "Abyssal Eye Bandage B",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "373",
                    "name" => "Abyssal Eye Bandage B",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "427",
                    "name" => "Knight Mask",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "223",
                    "name" => "Rectangular Glasses",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "230",
                    "name" => "Rectangular Glasses",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "231",
                    "name" => "Rectangular Glasses",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "232",
                    "name" => "Rectangular Glasses",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "233",
                    "name" => "Rectangular Glasses",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "234",
                    "name" => "Rectangular Glasses",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "235",
                    "name" => "Rectangular Glasses",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "224",
                    "name" => "Winking Mask",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "225",
                    "name" => "Bat Mask",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "226",
                    "name" => "Monocle",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "239",
                    "name" => "Monocle",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "240",
                    "name" => "Monocle",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "241",
                    "name" => "Monocle",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "242",
                    "name" => "Monocle",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "227",
                    "name" => "X Mask",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "228",
                    "name" => "Beard and Make-up",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "225",
                    "name" => "Mask of the Forgotten Hero D",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "366",
                    "name" => "Master Robber's Mask",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "362",
                    "name" => "Merchant Mask",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "361",
                    "name" => "Robber Mask",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "362",
                    "name" => "First Aid Mask",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "361",
                    "name" => "Inspector's Mask",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "363",
                    "name" => "Mask of the Elite",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "225",
                    "name" => "Commander's Mask",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "2427",
                    "name" => "Antique Mask",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "2428",
                    "name" => "Antique Fire Mask",
                    "slot" => "mask"
                ],
                [
                    "vnum" => "2825",
                    "name" => "Azrael's Mask",
                    "slot" => "mask"
                ]
            ],
            "ring" => [
                [
                    "vnum" => "505",
                    "name" => "Ancient Mano Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "508",
                    "name" => "Noble Mano Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "512",
                    "name" => "Cat's Eye Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "515",
                    "name" => "Noble Cat's Eye Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "520",
                    "name" => "Crystal Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "523",
                    "name" => "Noble Crystal Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "310",
                    "name" => "Ancient Crystal Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "525",
                    "name" => "Luxurious Crystal Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "528",
                    "name" => "Diamond Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "531",
                    "name" => "Noble Diamond Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "313",
                    "name" => "Ancient Diamond Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "534",
                    "name" => "Luxurious Diamond Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "313",
                    "name" => "Aquamarine Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "305",
                    "name" => "Noble Orichalcum Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "305",
                    "name" => "Full Moon Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "306",
                    "name" => "Ancient Orichalcum Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "419",
                    "name" => "Ring of the Forgotten Hero S",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "419",
                    "name" => "Diareason Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "323",
                    "name" => "Radal's Red Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "324",
                    "name" => "Radal's Blue Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "420",
                    "name" => "Rudiselrun's Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "2947",
                    "name" => "Lich Energy Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "421",
                    "name" => "Kedenoss Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "2437",
                    "name" => "Phoenix Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "2438",
                    "name" => "Grail's Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "4208",
                    "name" => "Jade Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "2787",
                    "name" => "Erenia's Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "2784",
                    "name" => "Zenas' Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "4209",
                    "name" => "Obsidian Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "4206",
                    "name" => "Jade Spirit Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "2828",
                    "name" => "Laurena's Ring",
                    "slot" => "ring"
                ],
                [
                    "vnum" => "4207",
                    "name" => "Orc Hero Ring",
                    "slot" => "ring"
                ]
            ],
            "necklet" => [
                [
                    "vnum" => "331",
                    "name" => "Hellhound Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "500",
                    "name" => "Simple Gold Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "501",
                    "name" => "Refined Gold Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "504",
                    "name" => "Ancient Mano Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "507",
                    "name" => "Noble Mano Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "511",
                    "name" => "Cat's Eye Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "514",
                    "name" => "Noble Cat's Eye Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "517",
                    "name" => "Luxurious Cat's Eye Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "519",
                    "name" => "Crystal Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "522",
                    "name" => "Noble Crystal Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "309",
                    "name" => "Ancient Crystal Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "527",
                    "name" => "Diamond Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "530",
                    "name" => "Noble Diamond Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "312",
                    "name" => "Ancient Diamond Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "533",
                    "name" => "Luxurious Diamond Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "303",
                    "name" => "Noble Orichalcum Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "303",
                    "name" => "Full Moon Amulet",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "304",
                    "name" => "Ancient Orichalcum Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "416",
                    "name" => "Necklace of the Forgotten Hero J",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "416",
                    "name" => "Diareason Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "416",
                    "name" => "Amethyst Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "417",
                    "name" => "Rudiselrun's Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "2945",
                    "name" => "Lich Energy Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "418",
                    "name" => "Kedenoss Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "2439",
                    "name" => "Blaze Hound's Collar",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "2440",
                    "name" => "Kertos' Collar",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "4212",
                    "name" => "Jade Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "4213",
                    "name" => "Obsidian Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "2786",
                    "name" => "Erenia's Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "2783",
                    "name" => "Zenas' Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "4210",
                    "name" => "Occult Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "2829",
                    "name" => "Laurena's Necklace",
                    "slot" => "necklet"
                ],
                [
                    "vnum" => "4211",
                    "name" => "Beastheart Necklace",
                    "slot" => "necklet"
                ]
            ],
            "bracelet" => [
                [
                    "vnum" => "503",
                    "name" => "Fashionable Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "506",
                    "name" => "Ancient Mano Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "509",
                    "name" => "Noble Mano Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "510",
                    "name" => "Luxurious Mano Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "513",
                    "name" => "Cat's Eye Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "516",
                    "name" => "Noble Cat's Eye Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "518",
                    "name" => "Luxurious Cat's Eye Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "521",
                    "name" => "Crystal Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "524",
                    "name" => "Noble Crystal Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "311",
                    "name" => "Ancient Crystal Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "526",
                    "name" => "Luxurious Crystal Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "529",
                    "name" => "Diamond Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "532",
                    "name" => "Noble Diamond Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "314",
                    "name" => "Ancient Diamond Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "535",
                    "name" => "Luxurious Diamond Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "535",
                    "name" => "Emerald Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "307",
                    "name" => "Noble Orichalcum Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "307",
                    "name" => "Full Moon Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "308",
                    "name" => "Ancient Orichalcum Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "422",
                    "name" => "Bracelet of the Forgotten Hero M",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "422",
                    "name" => "Diareason Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "423",
                    "name" => "Rudiselrun's Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "2946",
                    "name" => "Lich Energy Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "424",
                    "name" => "Kedenoss Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "2435",
                    "name" => "Flame Giant Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "2436",
                    "name" => "Katol's Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "4204",
                    "name" => "Jade Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "2788",
                    "name" => "Erenia's Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "2785",
                    "name" => "Zenas' Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "4205",
                    "name" => "Sekraz Stone Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "4202",
                    "name" => "Snake Loa Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "2827",
                    "name" => "Laurena's Bracelet",
                    "slot" => "bracelet"
                ],
                [
                    "vnum" => "4203",
                    "name" => "Spirit King's Bracelet",
                    "slot" => "bracelet"
                ]
            ],
            "gloves" => [
                [
                    "vnum" => "71",
                    "name" => "Slim Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "72",
                    "name" => "Rubber Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "60",
                    "name" => "Leather Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "716",
                    "name" => "Oven Mitts",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "61",
                    "name" => "Tough Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "700",
                    "name" => "Light Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "717",
                    "name" => "Shining Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "701",
                    "name" => "Silk Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "718",
                    "name" => "Wind Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "702",
                    "name" => "Magic Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "703",
                    "name" => "Light Gauntlets",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "315",
                    "name" => "Flame Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "704",
                    "name" => "Fast Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "325",
                    "name" => "Insoluble Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "705",
                    "name" => "Shining Battle Gauntlets",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "706",
                    "name" => "Shining Chain Gauntlets",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "704",
                    "name" => "Shining Fast Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "719",
                    "name" => "Shining Resistance Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "705",
                    "name" => "Battle Gauntlets",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "706",
                    "name" => "Chain Gauntlets",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "719",
                    "name" => "Gloves of Resistance",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "318",
                    "name" => "Death Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "707",
                    "name" => "Flash Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "720",
                    "name" => "Shadow Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "316",
                    "name" => "Storm Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "720",
                    "name" => "Dawn Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "412",
                    "name" => "Blaze Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "316",
                    "name" => "Shining Storm Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "315",
                    "name" => "Shining Flame Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "317",
                    "name" => "Shining Divine Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "318",
                    "name" => "Shining Death Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "317",
                    "name" => "Divine Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "716",
                    "name" => "Robber Gang's Silver Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "61",
                    "name" => "Robber Gang's Shining Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "705",
                    "name" => "Sea View Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "703",
                    "name" => "Black Stone Leather Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "707",
                    "name" => "Master Robber's Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "707",
                    "name" => "Honourable: Master Robber's Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "412",
                    "name" => "Roob'raph's Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "2940",
                    "name" => "Dragonrider's Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "413",
                    "name" => "Executioner Gauntlets",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "2431",
                    "name" => "Magmaros' Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "2432",
                    "name" => "Valakus' Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "2770",
                    "name" => "Sealed Heavenly Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "2772",
                    "name" => "Sealed Hellord Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "4325",
                    "name" => "Spirit King Gloves (Replica)",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "4326",
                    "name" => "Ancient Beast Gloves (Replica)",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "4198",
                    "name" => "Ancient Beast Gloves",
                    "slot" => "gloves"
                ],
                [
                    "vnum" => "4199",
                    "name" => "Spirit King Gloves",
                    "slot" => "gloves"
                ]
            ],
            "shoes" => [
                [
                    "vnum" => "62",
                    "name" => "Adventurer's Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "63",
                    "name" => "Heeled Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "64",
                    "name" => "Leather Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "721",
                    "name" => "Black Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "65",
                    "name" => "Roller Skates",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "708",
                    "name" => "Light Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "709",
                    "name" => "Fast Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "722",
                    "name" => "Water Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "710",
                    "name" => "Chain Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "711",
                    "name" => "Leather Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "723",
                    "name" => "Punk Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "712",
                    "name" => "Steel Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "321",
                    "name" => "Sparkle Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "713",
                    "name" => "Shining Protective Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "715",
                    "name" => "Shining Heavy Metal Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "714",
                    "name" => "Shining Wind Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "712",
                    "name" => "Shining Steel Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "713",
                    "name" => "Protective Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "724",
                    "name" => "Flame Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "714",
                    "name" => "Wind Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "715",
                    "name" => "Heavy Metal Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "320",
                    "name" => "Wave Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "725",
                    "name" => "Deep Sea Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "725",
                    "name" => "Midnight Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "414",
                    "name" => "Spirit Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "319",
                    "name" => "Blaze Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "320",
                    "name" => "Shining Wave Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "319",
                    "name" => "Shining Fire Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "321",
                    "name" => "Shining Sparkle Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "322",
                    "name" => "Shining Shadow Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "322",
                    "name" => "Shadow Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "710",
                    "name" => "Robber Gang's Silver Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "711",
                    "name" => "Robber Gang's Shining Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "65",
                    "name" => "Sea View Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "721",
                    "name" => "Black Stone Leather Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "722",
                    "name" => "Master Robber's Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "722",
                    "name" => "Honourable: Master Robber's Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "414",
                    "name" => "Hazerumble Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "2949",
                    "name" => "Dragonrider's Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "415",
                    "name" => "Ku'ru'kelron Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "2433",
                    "name" => "Flame Giant Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "2434",
                    "name" => "Kertos' Boots",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "4327",
                    "name" => "Ancient Beast Shoes (Replica)",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "4328",
                    "name" => "Spirit King Shoes (Replica)",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "2771",
                    "name" => "Sealed Heavenly Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "2773",
                    "name" => "Sealed Hellord Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "2792",
                    "name" => "Zenas' Luxury High Heels",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "2826",
                    "name" => "Fernon's Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "4200",
                    "name" => "Ancient Beast Shoes",
                    "slot" => "shoes"
                ],
                [
                    "vnum" => "4201",
                    "name" => "Spirit King Shoes",
                    "slot" => "shoes"
                ]
            ],
            "amulet" => [
                [
                    "vnum" => "332",
                    "name" => "Phantom's Amulet",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "2566",
                    "name" => "Spooky Tarot Card [Ghost]",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "2567",
                    "name" => "Spooky Tarot Card [Dracula]",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "2568",
                    "name" => "Spooky Tarot Card [Scarecrow]",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "1211",
                    "name" => "Red Mask",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "656",
                    "name" => "Tarot Card (Fool)",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "657",
                    "name" => "Tarot Card (The Magician)",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "658",
                    "name" => "Tarot Card (The Lovers)",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "659",
                    "name" => "Tarot Card (The Hermit)",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "660",
                    "name" => "Tarot Card (Death)",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "661",
                    "name" => "Tarot Card (The Devil)",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "662",
                    "name" => "Tarot Card (The Tower)",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "663",
                    "name" => "Tarot Card (The Star)",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "664",
                    "name" => "Tarot Card (The Moon)",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "588",
                    "name" => "Tarot Card (The Sun)",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "536",
                    "name" => "Amulet of Strength",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "180",
                    "name" => "Amulet of Attack Level",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "181",
                    "name" => "Amulet of Defence Level",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "182",
                    "name" => "Amulet of Attack and Defence Levels",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "537",
                    "name" => "Amulet of Resolve",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "2973",
                    "name" => "Mother Nature's Lightning Rune",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "2974",
                    "name" => "Mother Nature's Tree Rune",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "2975",
                    "name" => "Mother Nature's Cloud Rune",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "2976",
                    "name" => "Mother Nature's Fire Rune",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "2977",
                    "name" => "Mother Nature's Lightning Rune (Rare)",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "2978",
                    "name" => "Mother Nature's Tree Rune (Rare)",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "2979",
                    "name" => "Mother Nature's Cloud Rune (Rare)",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "2980",
                    "name" => "Mother Nature's Fire Rune (Rare)",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "578",
                    "name" => "Lightning Rune",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "579",
                    "name" => "Wave Rune",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "581",
                    "name" => "Cloud Rune",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "582",
                    "name" => "Wind Rune",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "584",
                    "name" => "Fire Rune",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "578",
                    "name" => "Lightning Talisman",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "579",
                    "name" => "Wave Talisman",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "581",
                    "name" => "Cloud Talisman",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "582",
                    "name" => "Wind Talisman",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "584",
                    "name" => "Fire Talisman",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "2551",
                    "name" => "Hero's Amulet of Fire",
                    "slot" => "amulet"
                ],
                [
                    "vnum" => "2582",
                    "name" => "Mystical Glacier Stone",
                    "slot" => "amulet"
                ]
            ],
            "wing" => [
                [
                    "vnum" => "4433",
                    "name" => "Devil Wings",
                    "slot" => "wing"
                ],
                [
                    "vnum" => "4333",
                    "name" => "Pumpkin Witch/Pumpkin Knight Costume Wings (Permanent)",
                    "slot" => "wing"
                ],
                [
                    "vnum" => "4283",
                    "name" => "Ice Witch Costume Wings (Permanent)",
                    "slot" => "wing"
                ],
                [
                    "vnum" => "4148",
                    "name" => "Tropical Costume Wings (Permanent)",
                    "slot" => "wing"
                ],
                [
                    "vnum" => "4129",
                    "name" => "Pixie Costume Wings (Permanent)",
                    "slot" => "wing"
                ],
                [
                    "vnum" => "4123",
                    "name" => "Fire Devil Costume Wings (Permanent)",
                    "slot" => "wing"
                ]
            ],
            "swordsman_armor" => [
                [
                    "vnum" => "94",
                    "name" => "Trainee Swordsman's Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "95",
                    "name" => "Padded Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "162",
                    "name" => "Durable Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "96",
                    "name" => "Quilted Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "97",
                    "name" => "Leather Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "163",
                    "name" => "Hard Leather Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "98",
                    "name" => "Armour of Stamina",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "99",
                    "name" => "Studded Leather Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "164",
                    "name" => "Victor's Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "100",
                    "name" => "Reinforced Leather Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "101",
                    "name" => "Scale Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "165",
                    "name" => "Guardian Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "102",
                    "name" => "Armour of Morale",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "103",
                    "name" => "Plate Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "166",
                    "name" => "Knight's Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "297",
                    "name" => "Brave Defender",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "104",
                    "name" => "Golden Rivet Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "105",
                    "name" => "Brigandine",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "167",
                    "name" => "Stone Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "106",
                    "name" => "Armour of Valour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "106",
                    "name" => "Bodyguard",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "298",
                    "name" => "Splendid Defender",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "279",
                    "name" => "Berios' Crystal Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "298",
                    "name" => "Heavy Defender",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "409",
                    "name" => "Cai'lander",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "298",
                    "name" => "Honourable: Robber Gang's Golden Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "298",
                    "name" => "Robber Gang's Golden Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "409",
                    "name" => "Robber Gang's Shining Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "360",
                    "name" => "Honourable: Commander's Heavy Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "2420",
                    "name" => "Forgotten Hero's Chest Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "360",
                    "name" => "Commander's Heavy Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "2418",
                    "name" => "Flame Giant Shell Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "2419",
                    "name" => "Katol's Steel Chest Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "2774",
                    "name" => "Sealed Heavy Heavenly Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "2777",
                    "name" => "Sealed Hellord Heavy Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "4184",
                    "name" => "Sekraz Stone Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "2819",
                    "name" => "Brave Shares' Heavy Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "4185",
                    "name" => "Lion Loa Sekraz Stone Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "4186",
                    "name" => "Orc Warrior Bone Armour",
                    "slot" => "Armor",
                    "classes" => "Swordsman"
                ]
            ],
            "swordsman_primary" => [
                [
                    "vnum" => "18",
                    "name" => "Beginner's Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "19",
                    "name" => "Short Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "135",
                    "name" => "Gladius",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "20",
                    "name" => "Sword of Pain",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "21",
                    "name" => "Short Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "136",
                    "name" => "Walloon Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "22",
                    "name" => "Bronze Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "23",
                    "name" => "Sabre",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "137",
                    "name" => "Viking Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "24",
                    "name" => "Broad Sword of Spirit",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "25",
                    "name" => "Falchion",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "138",
                    "name" => "Cutlass",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "262",
                    "name" => "Elvin's Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "26",
                    "name" => "Golden Sabre",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "27",
                    "name" => "Broadsword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "139",
                    "name" => "Katzbalger",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "28",
                    "name" => "Longsword of Power",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "29",
                    "name" => "Broadsword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "140",
                    "name" => "Knight's Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "30",
                    "name" => "Skyabona",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "31",
                    "name" => "Claymore",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "141",
                    "name" => "Slayer",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "263",
                    "name" => "Glorious Sabre",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "263",
                    "name" => "Fast Sabre",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "299",
                    "name" => "Flamberge",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "400",
                    "name" => "Loopuster",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "299",
                    "name" => "Heavy Greatsword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "264",
                    "name" => "Broken Elemental Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "401",
                    "name" => "Broken Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "262",
                    "name" => "Honourable: Calvinas' Firestorm Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "349",
                    "name" => "Desert Robbers' Longsword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "349",
                    "name" => "Thronblade",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "349",
                    "name" => "Honourable: Great Leader's Cut Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "350",
                    "name" => "Eglance",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "350",
                    "name" => "Calvinas' Firestorm Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "350",
                    "name" => "Hatus' Dark Lance",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "2465",
                    "name" => "Forgotten Hero's Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "4001",
                    "name" => "Great Leader's Cut Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "2464",
                    "name" => "Magmoros' Fire Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "2406",
                    "name" => "Valakus' Fire Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "2759",
                    "name" => "Sealed Heavenly Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "2767",
                    "name" => "Sealed Hellord Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "4160",
                    "name" => "Orc Warchief's Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "2813",
                    "name" => "Broken Krem's Right Blade",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "4161",
                    "name" => "Lion Loa Sword",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "4162",
                    "name" => "Magic Sword of Belial",
                    "slot" => "primary",
                    "classes" => "Swordsman"
                ]
            ],
            "swordsman_secondary" => [
                [
                    "vnum" => "68",
                    "name" => "Beginner's Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "69",
                    "name" => "Oak Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "156",
                    "name" => "Combat Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "70",
                    "name" => "Fairy Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "73",
                    "name" => "Steel Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "74",
                    "name" => "Masterpiece Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "291",
                    "name" => "Winslet Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "75",
                    "name" => "Shadow Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "157",
                    "name" => "Siege Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "76",
                    "name" => "Beechwood Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "77",
                    "name" => "Crossbow of Courage",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "77",
                    "name" => "Elven Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "292",
                    "name" => "Balenty Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "292",
                    "name" => "Ballista",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "402",
                    "name" => "Bergarce",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "291",
                    "name" => "Desert Vagabond's Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "292",
                    "name" => "Honourable: Calvinas' Bluethorn Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "352",
                    "name" => "Hero's Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "292",
                    "name" => "Calvinas' Bluethorn Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "402",
                    "name" => "Honourable: Great Leader's Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "2411",
                    "name" => "Forgotten Hero's Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "352",
                    "name" => "Great Leader's Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "2409",
                    "name" => "Phoenix's Claw",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "2410",
                    "name" => "Grail's Claw",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "2762",
                    "name" => "Sealed Heavenly Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "2780",
                    "name" => "Sealed Hellord Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "4172",
                    "name" => "Orc Warchief's Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "2815",
                    "name" => "Luminiel's Shining Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "4173",
                    "name" => "Lion Loa Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ],
                [
                    "vnum" => "4174",
                    "name" => "Beast King's Crossbow",
                    "slot" => "secondary",
                    "classes" => "Swordsman"
                ]
            ],
            "archer_armor" => [
         [
             "vnum" => "107",
             "name" => "Trainee Archer's Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "108",
             "name" => "Lambskin Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "168",
             "name" => "Flash Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "109",
             "name" => "Velour Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "110",
             "name" => "Goat Leather Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "169",
             "name" => "Tunic of Nature",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "111",
             "name" => "Tunic of Evasion",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "112",
             "name" => "Calfskin Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "170",
             "name" => "Sharkskin Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "113",
             "name" => "Suede Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "114",
             "name" => "Cow Leather Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "171",
             "name" => "Breath Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "115",
             "name" => "Eagle-Eyed Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "116",
             "name" => "Peccary Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "172",
             "name" => "Wind Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "295",
             "name" => "Sentinel Look",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "117",
             "name" => "Nubuck Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "118",
             "name" => "Tuscany Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "173",
             "name" => "Dryad Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "119",
             "name" => "Spirit Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "119",
             "name" => "Hunter's Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "296",
             "name" => "Robe of Light",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "280",
             "name" => "Berios' Crystal Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "296",
             "name" => "Breezy Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "410",
             "name" => "Suphi'rudin",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "296",
             "name" => "Honourable: Robber Gang's Golden Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "296",
             "name" => "Robber Gang's Golden Tunic",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "410",
             "name" => "Robber Gang's Shining Leather Armour",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "359",
             "name" => "Honourable: Commander's Leather Armour",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "2423",
             "name" => "Forgotten Hero's Leather Armour",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "359",
             "name" => "Commander's Leather Armour",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "2421",
             "name" => "Blaze Hound's Leather Armour",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "2422",
             "name" => "Kertos' Leather Chest Armour",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "2776",
             "name" => "Sealed Heavenly Leather Armour",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "2779",
             "name" => "Sealed Hellord Leather Armour",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "4187",
             "name" => "Orc Hunter Leather Armour",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "2820",
             "name" => "Leather Armour of Silver Soul Glacernon",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "4188",
             "name" => "Eagle Loa Leather Armour",
             "slot" => "Armor",
             "classes" => "Archer"
         ],
         [
             "vnum" => "4189",
             "name" => "Dragonscale Leather Armour",
             "slot" => "Armor",
             "classes" => "Archer"
         ]
     ],
            "archer_primary" => [
                [
                    "vnum" => "32",
                    "name" => "Beginner's Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "33",
                    "name" => "Small Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "142",
                    "name" => "Bow of Life",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "34",
                    "name" => "Bow of Speed",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "35",
                    "name" => "Bamboo Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "143",
                    "name" => "Flame Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "36",
                    "name" => "Magic Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "37",
                    "name" => "Oak Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "144",
                    "name" => "Synthetic Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "38",
                    "name" => "Wind Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "39",
                    "name" => "Horned Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "145",
                    "name" => "Double Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "265",
                    "name" => "Red Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "40",
                    "name" => "Leather Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "41",
                    "name" => "Hunting Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "146",
                    "name" => "Wild Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "42",
                    "name" => "Bow of Courage",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "43",
                    "name" => "Long Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "147",
                    "name" => "Large Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "44",
                    "name" => "Bronze Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "45",
                    "name" => "Bow of Spirit",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "148",
                    "name" => "Siege Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "266",
                    "name" => "Bow of Peace",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "266",
                    "name" => "Forest Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "300",
                    "name" => "Piercing Force Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "403",
                    "name" => "Seraphion",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "300",
                    "name" => "Dark Angelus Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "267",
                    "name" => "Majestic Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "404",
                    "name" => "Caipe'ru",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "265",
                    "name" => "Honourable: Calvinas' Redwave Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "353",
                    "name" => "Desert Robbers' Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "353",
                    "name" => "Elemental Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "353",
                    "name" => "Honourable: Great Leader's Recurve Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "354",
                    "name" => "Hazard Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "354",
                    "name" => "Hatus' Abyss Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "354",
                    "name" => "Calvinas' Redwave Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "2467",
                    "name" => "Forgotten Hero's Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "4003",
                    "name" => "Great Leader's Recurve Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "2466",
                    "name" => "Phoenix Wings",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "2407",
                    "name" => "Grail's Wings",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "2761",
                    "name" => "Sealed Heavenly Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "2769",
                    "name" => "Sealed Hellord Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "4163",
                    "name" => "Orc Sniper's Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "2816",
                    "name" => "Azrael's Wings",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "4164",
                    "name" => "Eagle Loa Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "4165",
                    "name" => "Belial's Cursed Bow",
                    "slot" => "primary",
                    "classes" => "Archer"
                ]
            ],
            "archer_secondary" => [
                [
                    "vnum" => "78",
                    "name" => "Beginner's Dagger",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "79",
                    "name" => "Dagger",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "158",
                    "name" => "Highlander Dirk",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "80",
                    "name" => "Dirk of Ordeals",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "81",
                    "name" => "Refined Dirk",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "82",
                    "name" => "Masterpiece Dirk",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "289",
                    "name" => "Scrammer",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "83",
                    "name" => "Brazen Dagger",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "159",
                    "name" => "Poignard Dagger",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "84",
                    "name" => "Ruby Dagger",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "85",
                    "name" => "Dagger of Spirit",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "85",
                    "name" => "Elven Dagger",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "290",
                    "name" => "Kris",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "290",
                    "name" => "Shadow Kris",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "405",
                    "name" => "Eca'ra'cci",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "289",
                    "name" => "Desert Scorpion Dagger",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "290",
                    "name" => "Honourable: Calvinas' Bluetooth Dagger",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "351",
                    "name" => "Darkscramer",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "405",
                    "name" => "Honourable: Great Leader's Knife",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "290",
                    "name" => "Calvinas' Bluetooth Dagger",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "2414",
                    "name" => "Forgotten Hero's Dagger",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "351",
                    "name" => "Great Leader's Knife",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "2412",
                    "name" => "Blaze Hound's Fang",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "2413",
                    "name" => "Kertos' Fang",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "2764",
                    "name" => "Sealed Heavenly Dagger",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "2766",
                    "name" => "Sealed Hellord Dagger",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "4175",
                    "name" => "Orc Assassin's Dagger",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "2814",
                    "name" => "Broken Krem's Left Blade",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "4176",
                    "name" => "Bat Loa Dagger",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ],
                [
                    "vnum" => "4177",
                    "name" => "Belial's Knife",
                    "slot" => "secondary",
                    "classes" => "Archer"
                ]
            ],
            "mage_armor" => [
                [
                    "vnum" => "120",
                    "name" => "Trainee Sorcerer's Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "121",
                    "name" => "Cotton Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "174",
                    "name" => "Beginner's Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "122",
                    "name" => "Magic Cotton Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "123",
                    "name" => "Linen Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "175",
                    "name" => "Soft Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "124",
                    "name" => "Recovery Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "125",
                    "name" => "Tweed Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "176",
                    "name" => "Robe of Clarity",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "126",
                    "name" => "Reinforced Linen Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "127",
                    "name" => "Muslin Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "177",
                    "name" => "Patterned Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "128",
                    "name" => "Elemental Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "129",
                    "name" => "Silk Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "178",
                    "name" => "Magic Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "271",
                    "name" => "Blue Robe of the Wise",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "130",
                    "name" => "Chequered Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "131",
                    "name" => "Herringbone Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "179",
                    "name" => "Robe of Origins",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "132",
                    "name" => "Robe of Darkness",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "132",
                    "name" => "Evil Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "272",
                    "name" => "Trial Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "281",
                    "name" => "Berios' Crystal Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "272",
                    "name" => "Robe of Wisdom",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "411",
                    "name" => "Ridy'arce",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "272",
                    "name" => "Honourable: Robber Gang's Golden Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "272",
                    "name" => "Robber Gang's Golden Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "411",
                    "name" => "Robber Gang's Shining Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "358",
                    "name" => "Honourable: Commander's Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "2426",
                    "name" => "Forgotten Hero's Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "358",
                    "name" => "Commander's Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "2424",
                    "name" => "Fiery Phoenix's Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "2425",
                    "name" => "Gleaming Grail's Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "2775",
                    "name" => "Sealed Heavenly Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "2778",
                    "name" => "Sealed Hellord Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "4190",
                    "name" => "Orc Mage Battle Gear",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "2821",
                    "name" => "Mukraju's Robe",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "4191",
                    "name" => "Snake Loa Battle Gear",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "4192",
                    "name" => "Robe of Kings",
                    "slot" => "armor",
                    "classes" => "Sorcerer"
                ]
            ],
            "mage_primary" => [
                [
                    "vnum" => "46",
                    "name" => "Beginner's Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "47",
                    "name" => "Red Bead Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "149",
                    "name" => "Magic Wand of Life",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "48",
                    "name" => "Wand of Spirit",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "49",
                    "name" => "Ruby Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "150",
                    "name" => "Magic Wand of Flame",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "50",
                    "name" => "Enchanted Magic Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "51",
                    "name" => "Blue Bead Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "151",
                    "name" => "Ice Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "52",
                    "name" => "Magic Wand of Light",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "53",
                    "name" => "Opal Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "152",
                    "name" => "Loon's Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "268",
                    "name" => "Red Sage Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "54",
                    "name" => "Mana Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "55",
                    "name" => "Coral Magic Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "153",
                    "name" => "Magic Spell Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "56",
                    "name" => "Magic Wand of Honour",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "57",
                    "name" => "Crystal Magic Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "154",
                    "name" => "Holy Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "58",
                    "name" => "Magic Wand of Intelligence",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "59",
                    "name" => "Magic Wand of Shadows",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "155",
                    "name" => "Soul Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "269",
                    "name" => "Ghost Whisper Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "269",
                    "name" => "Red Skull Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "301",
                    "name" => "Kai's Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "406",
                    "name" => "Mook'razue",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "301",
                    "name" => "Archmage Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "270",
                    "name" => "Majestic Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "407",
                    "name" => "Fair'losue",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "268",
                    "name" => "Honourable: Calvinas' Waterflower Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "356",
                    "name" => "Desert Robbers' Walking Stick",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "356",
                    "name" => "Seraphim Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "2938",
                    "name" => "Yertirand's Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "2939",
                    "name" => "Twisted Yertirand's Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "356",
                    "name" => "Honourable: Great Leader's Magic Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "357",
                    "name" => "Taracen Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "357",
                    "name" => "Hatus' Infernal Staff",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "357",
                    "name" => "Calvinas' Waterflower Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "2469",
                    "name" => "Forgotten Hero's Magic Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "4005",
                    "name" => "Great Leader's Magic Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "2468",
                    "name" => "Lava Ghost's Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "2408",
                    "name" => "Katol's Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "2760",
                    "name" => "Sealed Heavenly Staff",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "2768",
                    "name" => "Sealed Hellord Wand",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "4166",
                    "name" => "Warlock's Divine Staff",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "2817",
                    "name" => "Seli-Lusha's Branch of Light",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "4167",
                    "name" => "Snake Loa Staff",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "4168",
                    "name" => "Spirit King's Staff",
                    "slot" => "primary",
                    "classes" => "Sorcerer"
                ]
            ],
            "mage_secondary" => [
                [
                    "vnum" => "86",
                    "name" => "Beginner's Spell Gun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "87",
                    "name" => "Small Spell Gun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "160",
                    "name" => "Normal Spell Gun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "88",
                    "name" => "Magic Spell Gun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "89",
                    "name" => "Gold Spell Gun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "90",
                    "name" => "Masterpiece Spell Gun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "293",
                    "name" => "Plaz Spell Gun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "91",
                    "name" => "Brass Spell Gun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "161",
                    "name" => "Bronze Spell Gun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "92",
                    "name" => "Dignified Spell Gun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "93",
                    "name" => "Spell Gun of Shadows",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "93",
                    "name" => "Spirit Spell Gun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "294",
                    "name" => "Ray Spell Gun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "294",
                    "name" => "Star Spell Gun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "408",
                    "name" => "Renobi'r",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "293",
                    "name" => "Desert Magician's Magic Wand",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "294",
                    "name" => "Honourable: Calvinas' Bluehorn Spellgun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "355",
                    "name" => "Winged Spell Gun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "408",
                    "name" => "Honourable: Great Leader's Magic Weapon",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "294",
                    "name" => "Calvinas' Bluehorn Spellgun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "2417",
                    "name" => "Forgotten Hero's Spell Gun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "355",
                    "name" => "Great Leader's Magic Weapon",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "2415",
                    "name" => "Valaket's Breath",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "2416",
                    "name" => "Valakus' Breath",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "2763",
                    "name" => "Sealed Heavenly Spell Gun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "2765",
                    "name" => "Sealed Hellord Spell Gun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "4178",
                    "name" => "Orc Spell Gun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "2818",
                    "name" => "Abyssal Lorten's Spell Gun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "4179",
                    "name" => "Snake Loa Spell Gun",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ],
                [
                    "vnum" => "4180",
                    "name" => "Spirit King's Eternal Flame",
                    "slot" => "secondary",
                    "classes" => "Sorcerer"
                ]
            ],
            "w_skin" => [
                [
                    "vnum" => "2995",
                    "name" => "Christmas Tree (Permanent)",
                    "classes" => "Swordsman",
                    "slot" => "w_skin"
                ],
                [
                    "vnum" => "2959",
                    "name" => "10th Anniversary Cake Knife Skin (Permanent)",
                    "classes" => "Swordsman",
                    "slot" => "w_skin"
                ],
                [
                    "vnum" => "2918",
                    "name" => "Steampunk Chronoblade (Permanent)",
                    "classes" => "Swordsman",
                    "slot" => "w_skin"
                ],
                [
                    "vnum" => "2892",
                    "name" => "Imp Cudgel Skin (Permanent)",
                    "classes" => "Swordsman",
                    "slot" => "w_skin"
                ],
                [
                    "vnum" => "2887",
                    "name" => "Baseball Bat Skin (Permanent)",
                    "classes" => "Swordsman",
                    "slot" => "w_skin"
                ],
                [
                    "vnum" => "2996",
                    "name" => "Candy Bow (Permanent)",
                    "classes" => "Archer",
                    "slot" => "w_skin"
                ],
                [
                    "vnum" => "2960",
                    "name" => "10th Anniversary Cake Skin (Permanent)",
                    "classes" => "Archer",
                    "slot" => "w_skin"
                ],
                [
                    "vnum" => "2919",
                    "name" => "Steampunk Clockwork Bow (Permanent)",
                    "classes" => "Archer",
                    "slot" => "w_skin"
                ],
                [
                    "vnum" => "2893",
                    "name" => "Wildflower Bow Skin (Permanent)",
                    "classes" => "Archer",
                    "slot" => "w_skin"
                ],
                [
                    "vnum" => "2888",
                    "name" => "Recurve Bow Skin (Permanent)",
                    "classes" => "Archer",
                    "slot" => "w_skin"
                ],
                [
                    "vnum" => "2997",
                    "name" => "Christmas Bell (Permanent)",
                    "classes" => "Sorcerer",
                    "slot" => "w_skin"
                ],
                [
                    "vnum" => "2961",
                    "name" => "10th Anniversary Firecracker Skin (Permanent)",
                    "classes" => "Sorcerer",
                    "slot" => "w_skin"
                ],
                [
                    "vnum" => "2920",
                    "name" => "Steampunk Geared Wand (Permanent)",
                    "classes" => "Sorcerer",
                    "slot" => "w_skin"
                ],
                [
                    "vnum" => "2894",
                    "name" => "Uchiwa Skin (Permanent)",
                    "classes" => "Sorcerer",
                    "slot" => "w_skin"
                ],
                [
                    "vnum" => "2889",
                    "name" => "Tennis Racquet Skin (Permanent)",
                    "classes" => "Sorcerer",
                    "slot" => "w_skin"
                ]
            ],
            "c_hat" => [
                [
                    "vnum" => "4476",
                    "name" => "Unknown",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "4434",
                    "name" => "Unknown",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "4334",
                    "name" => "Pumpkin Witch/Pumpkin Knight Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "4290",
                    "name" => "Wizard of Noz Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "4281",
                    "name" => "Ice Witch Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "4146",
                    "name" => "Tropical Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "4127",
                    "name" => "Pixie Costume Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "4114",
                    "name" => "Easter Bunny Party Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "4111",
                    "name" => "Easter Bunny Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "4098",
                    "name" => "Fire Devil Mask (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "4075",
                    "name" => "Dracula Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "4056",
                    "name" => "Karate Hairstyle (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "4046",
                    "name" => "Puppet Master's Hairpin (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "4044",
                    "name" => "Puppet Master's Bear Head (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "4006",
                    "name" => "Winter Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "4010",
                    "name" => "Frost Warrior’s Helm (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2993",
                    "name" => "Reindeer Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2933",
                    "name" => "Desert Turban (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2935",
                    "name" => "Floral Crown (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2900",
                    "name" => "Viking Helmet (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2895",
                    "name" => "Concierge Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2890",
                    "name" => "Police Cap (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2884",
                    "name" => "Groovy Beach Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2811",
                    "name" => "Nutcracker Shako (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2801",
                    "name" => "Illusionist's Top Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2685",
                    "name" => "Snow White Tiger Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2683",
                    "name" => "Cuddly Tiger Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2652",
                    "name" => "Football Cap (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2632",
                    "name" => "Pink Party Diadem (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2639",
                    "name" => "Golden Peaked Cap (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2633",
                    "name" => "Yellow Party Diadem (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2638",
                    "name" => "Red Peaked Cap (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2634",
                    "name" => "Blue Party Diadem (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2640",
                    "name" => "Brown Peaked Cap (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2614",
                    "name" => "Navy Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2607",
                    "name" => "Magic Hat of Shadow (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2609",
                    "name" => "Magic Hat of Light (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2570",
                    "name" => "Oto-Fox Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2565",
                    "name" => "Glowing Pumpkin Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2557",
                    "name" => "Straw Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2535",
                    "name" => "Fluffy Rabbit Ears (m) (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "2536",
                    "name" => "Fluffy Rabbit Ears (f) (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "767",
                    "name" => "Pumpkin Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "759",
                    "name" => "Pink Bushi Hat (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "763",
                    "name" => "Turquoise Bushi Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "761",
                    "name" => "Blue Bushi Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "765",
                    "name" => "Black Bushi Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "755",
                    "name" => "Red Bushi Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "757",
                    "name" => "Yellow Bushi Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "753",
                    "name" => "Green Bushi Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "1512",
                    "name" => "Santa Bushtail Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "1414",
                    "name" => "Aqua Bushi Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "1414",
                    "name" => "Aqua Bushi Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "971",
                    "name" => "Classic Bushi Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "4000",
                    "name" => "Wedding Hairstyle (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "959",
                    "name" => "Blue Marine Cap (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "963",
                    "name" => "Blue Sailor Cap (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "933",
                    "name" => "Hawaii Headdress (m) (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "936",
                    "name" => "Hawaii Headdress (f) (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "821",
                    "name" => "Smart Men's Hat (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "196",
                    "name" => "Starlight Hairband (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "973",
                    "name" => "Christmas Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "898",
                    "name" => "Demon Hat (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "879",
                    "name" => "Black Lion Hat (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "876",
                    "name" => "Golden Lion Hat (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "873",
                    "name" => "White Rabbit Hat (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "895",
                    "name" => "Fairy Hairband (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "855",
                    "name" => "Dark Lion Hat (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "870",
                    "name" => "March Hare Hat (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "852",
                    "name" => "Light Lion Hat (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "867",
                    "name" => "Korat Cat Hat (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "849",
                    "name" => "Adorable Bunny Ears (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "864",
                    "name" => "Burma Cat Hat (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "849",
                    "name" => "Bunny Hairband",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "846",
                    "name" => "Playful Bunny Ears (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "861",
                    "name" => "Saint Bernard Hat (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "843",
                    "name" => "Russian Blue Cat Hat (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "858",
                    "name" => "Bulldog Hat (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "562",
                    "name" => "Ebosi (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "840",
                    "name" => "Siamese Cat Hat (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "559",
                    "name" => "Asian Hat (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "837",
                    "name" => "Rottweiler Hat (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "556",
                    "name" => "Hogeon (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "834",
                    "name" => "Dalmatian Hat (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "553",
                    "name" => "Flower Hairpin (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "483",
                    "name" => "Red Founder Hat (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "550",
                    "name" => "Empress Coronet (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "482",
                    "name" => "Green Founder Hat (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "547",
                    "name" => "Ayam (Permanent)",
                    "gender" => "Female",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "481",
                    "name" => "Blue Founder Hat (Permanent)",
                    "gender" => "Male",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "480",
                    "name" => "Nutshell Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "479",
                    "name" => "Luxury Flowerpot Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "478",
                    "name" => "Orange Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "457",
                    "name" => "Rat Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "456",
                    "name" => "Teddy Bear Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "455",
                    "name" => "Polar Bear Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "454",
                    "name" => "Asian Black Bear Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ],
                [
                    "vnum" => "446",
                    "name" => "Panda Hat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_hat"
                ]
            ],
            "c_body" => [
                [
                    "vnum" => "4477",
                    "name" => " ???",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "4435",
                    "name" => " ???",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "4335",
                    "name" => "Pumpkin Witch/Pumpkin Knight Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "4291",
                    "name" => "Wizard of Noz Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "4282",
                    "name" => "Ice Witch Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "4147",
                    "name" => "Tropical Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "4128",
                    "name" => "Pixie Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "4115",
                    "name" => "Easter Bunny Party Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "4112",
                    "name" => "Easter Bunny Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "4099",
                    "name" => "Fire Devil Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "4076",
                    "name" => "Dracula Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "4077",
                    "name" => "11th Anniversary Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "4057",
                    "name" => "Karate Gi (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "4047",
                    "name" => "Puppet Master's Dress (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "4045",
                    "name" => "Puppet Master's Bear Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "4007",
                    "name" => "Long Winter Coat (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "4011",
                    "name" => "Frost Warrior’s Armour (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2994",
                    "name" => "Reindeer Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "4008",
                    "name" => "Dragon Knight Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2934",
                    "name" => "Desert Robe (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2936",
                    "name" => "Belly Dancer Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2901",
                    "name" => "Viking Armour (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2896",
                    "name" => "Concierge Uniform (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2891",
                    "name" => "Police Uniform (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2885",
                    "name" => "Groovy Beach Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2812",
                    "name" => "Nutcracker Uniform (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2802",
                    "name" => "Illusionist's Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2686",
                    "name" => "Snow White Tiger Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2684",
                    "name" => "Cuddly Tiger Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2653",
                    "name" => "Football Jersey (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2637",
                    "name" => "Blue Party Dress (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2642",
                    "name" => "Golden Detective's Suit (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2636",
                    "name" => "Yellow Party Dress (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2641",
                    "name" => "Red Detective's Suit (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2635",
                    "name" => "Pink Party Dress (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2643",
                    "name" => "Brown Detective's Suit (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2615",
                    "name" => "Navy Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2608",
                    "name" => "Magic Robe of Shadow (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2610",
                    "name" => "Magic Garment of Light (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2569",
                    "name" => "Oto-Fox Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2537",
                    "name" => "Fluffy Rabbit Costume (m) (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "2538",
                    "name" => "Fluffy Rabbit Costume (f) (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "758",
                    "name" => "Pink Bushi Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "762",
                    "name" => "Turquoise Bushi Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "760",
                    "name" => "Blue Bushi Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "764",
                    "name" => "Black Bushi Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "754",
                    "name" => "Red Bushi Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "756",
                    "name" => "Yellow Bushi Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "752",
                    "name" => "Green Bushi Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "1513",
                    "name" => "Santa Bushi Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "1415",
                    "name" => "Aqua Bushi Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "1415",
                    "name" => "Aqua Bushi Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "969",
                    "name" => "Classic Bushi Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "981",
                    "name" => "Wedding Clothes (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "951",
                    "name" => "Blue Marine Suit (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "955",
                    "name" => "Blue Sailor Suit (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "925",
                    "name" => "Hawaii Costume (m) (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "934",
                    "name" => "Hawaii Costume (f) (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "820",
                    "name" => "Smart Men's Suit (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "193",
                    "name" => "Starlight School Uniform (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "976",
                    "name" => "Christmas Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "889",
                    "name" => "Fairy Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "892",
                    "name" => "Demon Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "807",
                    "name" => "Dark Lion Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "831",
                    "name" => "Black Lion Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "805",
                    "name" => "Light Lion Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "828",
                    "name" => "Golden Lion Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "797",
                    "name" => "Adorable Bunny Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "825",
                    "name" => "White Rabbit Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "794",
                    "name" => "Playful Bunny Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "822",
                    "name" => "March Hare Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "791",
                    "name" => "Russian Blue Cat Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "819",
                    "name" => "Korat Cat Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "788",
                    "name" => "Siamese Cat Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "816",
                    "name" => "Burma Cat Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "785",
                    "name" => "Rottweiler Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "813",
                    "name" => "Saint Bernard Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "782",
                    "name" => "Dalmatian Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "810",
                    "name" => "Bulldog Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "689",
                    "name" => "Dadami Kimono (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "751",
                    "name" => "Kunoichi Kimono (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "686",
                    "name" => "Sunlight Kimono (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "748",
                    "name" => "Lily Kimono (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "683",
                    "name" => "Moonlight Kimono (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "745",
                    "name" => "Cherry Blossom Kimono (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "680",
                    "name" => "Dragon Chipao (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "742",
                    "name" => "Black Chipao (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "677",
                    "name" => "Emperor Chipao (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "739",
                    "name" => "Phoenix Chipao (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "674",
                    "name" => "Kung Fu Chipao (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "736",
                    "name" => "Lavender Chipao (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "671",
                    "name" => "Summer Hanbok (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "733",
                    "name" => "Rose Hanbok (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "668",
                    "name" => "Rainbow Hanbok (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "730",
                    "name" => "Crocus Hanbok (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "665",
                    "name" => "Spring Hanbok (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "727",
                    "name" => "Azalea Hanbok (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "476",
                    "name" => "Adventurer Clothing (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "698",
                    "name" => "Chocolate Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "474",
                    "name" => "Heavy Metal Clothes (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "695",
                    "name" => "Fresh Mint Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "472",
                    "name" => "Fire Clothing (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "692",
                    "name" => "Fire Rose Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "470",
                    "name" => "Forester Outfit (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "471",
                    "name" => "Purple School Uniform (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "468",
                    "name" => "Military Clothing (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "469",
                    "name" => "Yellow School Uniform (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "466",
                    "name" => "Denim Clothing (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "467",
                    "name" => "Green School Uniform (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "464",
                    "name" => "Fashion Sportswear (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "465",
                    "name" => "Hot Pink Sportswear (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "462",
                    "name" => "Fire Sportswear (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "463",
                    "name" => "Bluesky Sportswear (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "460",
                    "name" => "Sunny Sportswear (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "461",
                    "name" => "Coral Pink Sportswear (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "458",
                    "name" => "Hiphop Outfit (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "459",
                    "name" => "Noire Black Sportswear (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "453",
                    "name" => "Teddy Bear Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "451",
                    "name" => "Polar Bear Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "450",
                    "name" => "Asian Black Bear Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ],
                [
                    "vnum" => "452",
                    "name" => "Panda Costume (Permanent)",
                    "gender" => "Unisex",
                    "slot" => "c_body"
                ]
            ],
            "ma_primary" => [
                [
                    "vnum" => "4014",
                    "name" => "Steel Fist",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4012",
                    "name" => "Short Riding Gauntlet",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4013",
                    "name" => "Martial Artist's Gauntlet",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4016",
                    "name" => "Black Fist",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4012",
                    "name" => "Toughened Leather Gauntlet",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4013",
                    "name" => "Martial Artist's Leather Gauntlet",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4015",
                    "name" => "Gauntlet of Power",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4017",
                    "name" => "Apprentice Assassin's Gauntlet",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4017",
                    "name" => "Sicario's Gauntlet",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4018",
                    "name" => "Doom Fists' Gauntlet",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4019",
                    "name" => "Cold Metal Gauntlet",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4020",
                    "name" => "Ladine's Tear",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4021",
                    "name" => "Fenris' Claw",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4022",
                    "name" => "Fire Golem Gauntlet",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4023",
                    "name" => "Chaos Scale Gauntlet",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4024",
                    "name" => "Flame of Ifrit",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4025",
                    "name" => "Sealed Goddess Fist",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4169",
                    "name" => "Orc Sekraz Gauntlets",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4026",
                    "name" => "Divine Fist",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4170",
                    "name" => "Bear Loa Gauntlets",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4171",
                    "name" => "Beast King's Gauntlets",
                    "slot" => "primary",
                    "classes" => "Martial Artist"
                ]
            ],
            "ma_armor" => [
                [
                    "vnum" => "4029",
                    "name" => "Trainee Martial Artist's Uniform",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4031",
                    "name" => "Grubby Riding Armour",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4031",
                    "name" => "Riding Armour",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4032",
                    "name" => "Black's Suit",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4031",
                    "name" => "Leather Armour",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4032",
                    "name" => "Toughened Leather Armour",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4033",
                    "name" => "Power Armour",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4032",
                    "name" => "Apprentice Assassin's Armour",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4032",
                    "name" => "Sicario's Armour",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4033",
                    "name" => "Doom Fists' Armour",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4034",
                    "name" => "Desert Robbers' Armour",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4035",
                    "name" => "Akamur Armour",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4036",
                    "name" => "Mysterious Traveller's Armour",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4037",
                    "name" => "Felice's Armour",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4038",
                    "name" => "Lord Cuarry's Armour",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4039",
                    "name" => "Challenger's Armour",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4040",
                    "name" => "Rumial's Holiness",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4193",
                    "name" => "Light Sekraz Armour",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4041",
                    "name" => "Champion's Armour",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4194",
                    "name" => "Bear Loa Light Armour",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4195",
                    "name" => "Carlio's Wrath Armour",
                    "slot" => "armor",
                    "classes" => "Martial Artist"
                ]
            ],
            "ma_secondary" => [
                [
                    "vnum" => "4061",
                    "name" => "One-Horse Bronze Token",
                    "slot" => "secondary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4062",
                    "name" => "Two-Horse Bronze Token",
                    "slot" => "secondary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4063",
                    "name" => "Three-Horse Bronze Token",
                    "slot" => "secondary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4064",
                    "name" => "One-Horse Silver Token",
                    "slot" => "secondary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4065",
                    "name" => "Two-Horse Silver Token",
                    "slot" => "secondary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4066",
                    "name" => "Three-Horse Silver Token",
                    "slot" => "secondary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4067",
                    "name" => "One-Horse Gold Token",
                    "slot" => "secondary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4068",
                    "name" => "Two-Horse Gold Token",
                    "slot" => "secondary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4069",
                    "name" => "Three-Horse Gold Token",
                    "slot" => "secondary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4070",
                    "name" => "Magic Blue Dragon Token",
                    "slot" => "secondary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4071",
                    "name" => "Magic White Tiger Token",
                    "slot" => "secondary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4072",
                    "name" => "Magic Red Phoenix Token",
                    "slot" => "secondary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4073",
                    "name" => "Magic Black Turtle Token",
                    "slot" => "secondary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4181",
                    "name" => "Sekraz Jade Token",
                    "slot" => "secondary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4182",
                    "name" => "Blessed Sekraz Jade Token",
                    "slot" => "secondary",
                    "classes" => "Martial Artist"
                ],
                [
                    "vnum" => "4183",
                    "name" => "Bear Loa Token",
                    "slot" => "secondary",
                    "classes" => "Martial Artist"
                ]
            ],
        ];

        foreach($items as $item)
            $this->create($item);
    }

    private function create($datas) {
        foreach($datas as $data) {
            try {
                \App\Models\Items::create($data);
            } catch (\Exception $exception) {
                Log::debug("Item Creation Exection", [$data, $exception]);
            }
        }
    }
}
