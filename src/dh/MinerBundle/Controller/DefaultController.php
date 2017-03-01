<?php

namespace dh\MinerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use dh\MinerBundle\Service\miner;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	//ToDO: CSV import function, via frontend, frontend result set.
    	$miner = new miner();
    	$data = $miner->get_image("4050538239195,93624920069,75678666735,602547682178,888751924925,888751805521,5414939934384,8718456040434,851365006103,851365006721,602547608666,825646440900,602547648686,75678665738,8714835114697,602547792495,602547782670,8717344758949,8717774673171,602547854032,602547810458,889853124725,5060459441132,887828037124,817231012982,93624921806,602547693259,5051083104784,8718456038110,8718521040222,889853368228,602547925893,602547842275,889853193028,889853119929,602547871091,889853107728,602547928658,5055006556216,888072386907,888751882621,634904079024,93624920168,93624920151,5411530807321,602547928672,602557003017,8718456028135,711297315738,602557077889,602557137866,602547955715,889853626427,602557187861,602557182934,602557072211,8718456028104,93624916420,602557089363,602557132618,889853710423,5051083111867,889853902729,889853710324,602557156263,75678662737,75678662737,602557275926,889854016524,663452671015,663452671022,663452671039,608917017526,5099961576223,5055295302693,5055295303041,5055295303096,5055295303133,5055295303171,5055295337497,5055295337503,5055295337510,5055295352414,5055295352438,5055295356856,5055295381896,4260283113514,5055295315525,5055295317765,5055295308992,5055295310902,8718375454671,878615024281,878615024236,4260057122186,878615067912,878615061286,878615075825,878615075801,878615061255,878615075740,878615071636,878615035294,878615035324,878615044937,4260057122117,849803048686,4260283113538,878615065949,4260283113392,5060043064310,8713545005127,8713545006704,8718375456897,727361234805,8713545006698,8713545006438,8713545005097,4260057125002,8713545006711,4029811183791,4260057125057,5055295323094,5055336694190,5055295363991,5060063221359,5060063229843,8716241077658,5060063220895,5060063220864,4029811311941,5032331015144,8713545005103,8717418381318,5055336623152,8718182074055,848447012756,848447012510,4029811167487,8713545007688,4029811308613,5060063221328,878615024229,878615024243,878615024267,8718182070620,45778737215,8717418429751,8717418429584,8717418446697,8717418429843,8717418446680,8718182070521,5030917116421,8717418429867,8718627610145,5060063221465,35594000938,4029811211708,4029811311729,5032331029134,5060150689574,878615065932,4029811212262,5030917115103,5030917115059,5030917115035,5030917116513,3298496205116,85896397489,728987017094,8718182073980,5023209213557,5054190171199,5054190171205,5023209189999,5060063221618,5032331043161,8718182073454,8718182073461,5060150680144,4029811320004,728987019968,5060043064280,40232885785,1094922079403,604020023058,9789087490010,4029811288335,8717418381035,8717418381042,5060280493942,5032331038709,5030917115011,8717418429928,4029811115549,5060113898487,8718182070262,85854227322,8713414809009,8718777571013,8718777571037,8718777610057,604020029593,849803062255,849803047818,8717418401054,5060146590310,5060113899132,5060280494512,8718182073959,5060146590723,5051494018984,5060150687099,5060171961338,5414939905216,885606000711,3499550301373,848447000531,8718182073966,727361327309,8718182071757,3499550287226,5030917116407,5030917116414,812765020618,762189252006,4260283113477,846556183244,4942079124149,4029811296866,94664027312,8717418444853,86786245330,608917455427,727361381011,5414045000935,86786257951,727361347543,3499550302813,3499550302790,8718696124161,8718696124185,727361356774,5034504102873,848447009985,848447009961,700371368234,8718627610275,727361362249,727361335342,727361305352,5032331038082,8718182072662,9783037781579,8715751858757,727361373443,8713545003734,825646412655,6921607100679,8715751858740,8712581549824,8712581550042,8712581549909,8715751859105,5051083076821,4260057123275,5050293384016,5050293384122,5050293384146,8799999100809,5055295307285,5055295307346,5055295313781,5055295313798,5055295313828,5055295314863,5055295315150,5055295379039,5055295381902,4260283113453,878615024304,8718627610206,878615070905,4050538194623,608917017427");
    	//$title = $miner->get_title("3307215913048");
    	//$test = "test";

        return $this->render('dhMinerBundle:Default:index.html.twig', array(
        	'test' => $data,
        ));

    }
}
