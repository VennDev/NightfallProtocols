<?php

namespace Supero\NightfallProtocol\network;

class CustomProtocolInfo {

    public const CURRENT_PROTOCOL = self::PROTOCOL_1_21_2;

    public const ACCEPTED_PROTOCOLS = [
        self::CURRENT_PROTOCOL,
        self::PROTOCOL_1_21_0,
        self::PROTOCOL_1_20_80,
        self::PROTOCOL_1_20_70,
        self::PROTOCOL_1_20_60
	];

    //Latest + Version unharmed.
    //In case a version has no real protocol/item/block changes.
    //If the latest has changed from the previous, only put the current protocol here
    public const COMBINED_LATEST = [
        self::CURRENT_PROTOCOL,
        self::PROTOCOL_1_21_0
    ];

    //TODO: Update to the latest version (1.21.20)
    public const PROTOCOL_1_21_20 = 703;//im coding this on the plane i literally can't check the protocol version :sob:
    public const PROTOCOL_1_21_2 = 686;
    public const PROTOCOL_1_21_0 = 685;
    public const PROTOCOL_1_20_80 = 671;
    public const PROTOCOL_1_20_70 = 662;
    public const PROTOCOL_1_20_60 = 649;

}