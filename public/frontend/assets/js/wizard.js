var _0xc2cf = [
    "use strict",
    "action",
    "/test/submit",
    "attr",
    "form#wrapped",
    ":radio",
    "is",
    ":checkbox",
    "next",
    "insertBefore",
    "insertAfter",
    "validate",
    "#wrapped",
    ".submit",
    "length",
    "val",
    "input#website",
    "isMovingForward",
    ":input",
    "find",
    "step",
    "state",
    "wizard",
    "valid",
    "#wizard_container",
    "progressbar",
    "#progressbar",
    "value",
    "percentComplete",
    "",
    "stepsComplete",
    " of ",
    "stepsPossible",
    " completed",
    "text",
    "#location",
    "#name_field",
    "name_field",
    "#email_field",
    "email_field",
];
jQuery(function (_0x2dfbx1) {
    _0xc2cf[0];
    _0x2dfbx1(_0xc2cf[4])[_0xc2cf[3]](_0xc2cf[1], _0xc2cf[2]);
    _0x2dfbx1(_0xc2cf[24])[_0xc2cf[22]]({
        stepsWrapper: _0xc2cf[12],
        submit: _0xc2cf[13],
        unidirectional: false,
        beforeSelect: function (_0x2dfbx4, _0x2dfbx5) {
            if (_0x2dfbx1(_0xc2cf[16])[_0xc2cf[15]]()[_0xc2cf[14]] != 0) {
                return false;
            }
            if (!_0x2dfbx5[_0xc2cf[17]]) {
                return true;
            }
            var _0x2dfbx6 = _0x2dfbx1(this)[_0xc2cf[22]](_0xc2cf[21])[_0xc2cf[20]][_0xc2cf[19]](_0xc2cf[18]);
            return !_0x2dfbx6[_0xc2cf[14]] || !!_0x2dfbx6[_0xc2cf[23]]();
        },
    })[_0xc2cf[11]]({
        errorPlacement: function (_0x2dfbx2, _0x2dfbx3) {
            if (
                _0x2dfbx3[_0xc2cf[6]](_0xc2cf[5]) ||
                _0x2dfbx3[_0xc2cf[6]](_0xc2cf[7])
            ) {
                _0x2dfbx2[_0xc2cf[9]](_0x2dfbx3[_0xc2cf[8]]());
            } else {
                _0x2dfbx2[_0xc2cf[10]](_0x2dfbx3);
            }
        },
    });
    _0x2dfbx1(_0xc2cf[26])[_0xc2cf[25]]();
    _0x2dfbx1(_0xc2cf[24])[_0xc2cf[22]]({
        afterSelect: function (_0x2dfbx4, _0x2dfbx5) {
            _0x2dfbx1(_0xc2cf[26])[_0xc2cf[25]](
                _0xc2cf[27],
                _0x2dfbx5[_0xc2cf[28]]
            );
            _0x2dfbx1(_0xc2cf[35])[_0xc2cf[34]](
                _0xc2cf[29] +
                _0x2dfbx5[_0xc2cf[30]] +
                _0xc2cf[31] +
                _0x2dfbx5[_0xc2cf[32]] +
                _0xc2cf[33]
            );
        },
    });
});
function getVals(_0x2dfbx8, _0x2dfbx9) {
    switch (_0x2dfbx9) {
    case _0xc2cf[37]:
        var _0x2dfbxa = $(_0x2dfbx8)[_0xc2cf[15]]();
        $(_0xc2cf[36])[_0xc2cf[34]](_0x2dfbxa);
        break;
    case _0xc2cf[39]:
        var _0x2dfbxa = $(_0x2dfbx8)[_0xc2cf[15]]();
        $(_0xc2cf[38])[_0xc2cf[34]](_0x2dfbxa);
        break;
    }
}
