<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_cdn.proto

namespace Volc\Service\Vod\Models\GPBMetadata;

class VodCdn
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa3120a1a766f642f627573696e6573732f766f645f63646e2e70726f746f121e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e65737322cd010a13566f64446f6d61696e436f6e666967496e666f12110a0953706163654e616d6518012001280912500a10506c6179496e7374616e6365496e666f18022001280b32362e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64446f6d61696e496e7374616e6365496e666f7312510a11496d616765496e7374616e6365496e666f18032001280b32362e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64446f6d61696e496e7374616e6365496e666f7322b5010a16566f64446f6d61696e496e7374616e6365496e666f73124c0a0d42797465496e7374616e63657318012003280b32352e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64446f6d61696e496e7374616e6365496e666f124d0a0e4f74686572496e7374616e63657318022003280b32352e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64446f6d61696e496e7374616e6365496e666f229a010a15566f64446f6d61696e496e7374616e6365496e666f12120a0a496e7374616e63654964180120012809123f0a07446f6d61696e7318022003280b322e2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64446f6d61696e6f496e666f12160a0e43616e53656c6645646974696e6718032001280812140a0c436f6e66696753746174757318042001280922e1010a0e566f64446f6d61696e6f496e666f120e0a06446f6d61696e180120012809120d0a05436e616d6518022001280912140a0c436f6e66696753746174757318032001280912130a0b436e616d65537461747573180420012809120e0a06537461747573180520012809124d0a0b436572746966696361746518062001280b32382e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64446f6d61696e4365727469666963617465496e666f12120a0a43726561746554696d6518072001280912120a0a55706461746554696d65180820012809228f010a18566f64446f6d61696e4365727469666963617465496e666f12150a0d4365727469666963617465496418012001280912170a0f43657274696669636174654e616d6518022001280912160a0e436572746966696361746550756218032001280912160a0e436572746966696361746550726918042001280912130a0b487474707353746174757318052001280922280a16566f6443726561746543646e5461736b526573756c74120e0a065461736b496418012001280922730a0e566f64436f6e74656e74496e666f120e0a064974656d4964180120012809120b0a0355726c180220012809120e0a0653746174757318032001280912100a085461736b5479706518042001280912120a0a43726561746554696d65180520012801120e0a065461736b4964180620012809228f010a10566f6443646e5461736b526573756c7412120a0a546f74616c436f756e74180120012805120f0a07506167654e756d18022001280512100a085061676553697a6518032001280512440a0c436f6e74656e74496e666f7318042003280b322e2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64436f6e74656e74496e666f227f0a16566f6443646e4163636573734c6f67456c656d656e7412130a0b446f776e6c6f616455726c18012001280912100a0846696c6553697a6518022001280312100a0846696c654e616d6518032001280912160a0e537461727454696d657374616d7018042001280512140a0c456e6454696d657374616d70180520012805226e0a13566f6443646e4163636573734c6f67496e666f120e0a06446f6d61696e18012001280912470a074c6f674c69737418022003280b32362e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6443646e4163636573734c6f67456c656d656e74225e0a19566f644c69737443646e4163636573734c6f67526573756c7412410a044c6f677318012003280b32332e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6443646e4163636573734c6f67496e666f22420a19566f6443646e546f7041636365737355726c456c656d656e74120b0a0355726c180120012809120a0a025076180220012803120c0a04466c7578180320012803226b0a1c566f644c69737443646e546f7041636365737355726c526573756c74124b0a0855726c496e666f7318012003280b32392e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6443646e546f7041636365737355726c456c656d656e7422330a10566f6442616e64776964746844617461120c0a0454696d6518012001280912110a0942616e647769647468180220012801228c020a27566f644465736372696265566f64446f6d61696e42616e64776964746844617461526573756c7412120a0a446f6d61696e4c69737418012003280912110a09537461727454696d65180220012809120f0a07456e6454696d6518032001280912130a0b4167677265676174696f6e18042001280512150a0d42616e6477696474685479706518052001280912150a0d5065616b42616e64776964746818062001280112190a115065616b42616e64776964746854696d65180720012809124b0a1142616e647769647468446174614c69737418082003280b32302e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6442616e6477696474684461746142ca010a29636f6d2e766f6c63656e67696e652e736572766963652e766f642e6d6f64656c2e627573696e6573734206566f6443646e50015a416769746875622e636f6d2f766f6c63656e67696e652f766f6c632d73646b2d676f6c616e672f736572766963652f766f642f6d6f64656c732f627573696e657373a00101d80101c20200ca0220566f6c635c536572766963655c566f645c4d6f64656c735c427573696e657373e20223566f6c635c536572766963655c566f645c4d6f64656c735c4750424d65746164617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

