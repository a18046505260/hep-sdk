# coding: utf-8

"""
    HEP REST API

    The REST API for HEP protocol  # noqa: E501

    OpenAPI spec version: v1
    Contact: xiawu@zeuux.org
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


import pprint
import re  # noqa: F401

import six


class CancelProofRequest(object):
    """NOTE: This class is auto generated by the swagger code generator program.

    Do not edit the class manually.
    """

    """
    Attributes:
      swagger_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    swagger_types = {
        'dapp_key': 'str',
        'protocol': 'str',
        'version': 'str',
        'ts': 'int',
        'nonce': 'str',
        'os': 'str',
        'language': 'str',
        'dapp_signature_method': 'str',
        'dapp_signature': 'str',
        'sign_type': 'str',
        'signature': 'str',
        'dapp_id': 'str',
        'proof_item_id': 'str',
        'proof_subitem_id': 'str'
    }

    attribute_map = {
        'dapp_key': 'dapp_key',
        'protocol': 'protocol',
        'version': 'version',
        'ts': 'ts',
        'nonce': 'nonce',
        'os': 'os',
        'language': 'language',
        'dapp_signature_method': 'dapp_signature_method',
        'dapp_signature': 'dapp_signature',
        'sign_type': 'sign_type',
        'signature': 'signature',
        'dapp_id': 'dapp_id',
        'proof_item_id': 'proof_item_id',
        'proof_subitem_id': 'proof_subitem_id'
    }

    def __init__(self, dapp_key=None, protocol=None, version=None, ts=None, nonce=None, os=None, language=None, dapp_signature_method=None, dapp_signature=None, sign_type=None, signature=None, dapp_id=None, proof_item_id=None, proof_subitem_id=None):  # noqa: E501
        """CancelProofRequest - a model defined in Swagger"""  # noqa: E501

        self._dapp_key = None
        self._protocol = None
        self._version = None
        self._ts = None
        self._nonce = None
        self._os = None
        self._language = None
        self._dapp_signature_method = None
        self._dapp_signature = None
        self._sign_type = None
        self._signature = None
        self._dapp_id = None
        self._proof_item_id = None
        self._proof_subitem_id = None
        self.discriminator = None

        self.dapp_key = dapp_key
        self.protocol = protocol
        self.version = version
        self.ts = ts
        self.nonce = nonce
        self.os = os
        self.language = language
        self.dapp_signature_method = dapp_signature_method
        self.dapp_signature = dapp_signature
        self.sign_type = sign_type
        self.signature = signature
        self.dapp_id = dapp_id
        self.proof_item_id = proof_item_id
        if proof_subitem_id is not None:
            self.proof_subitem_id = proof_subitem_id

    @property
    def dapp_key(self):
        """Gets the dapp_key of this CancelProofRequest.  # noqa: E501

        The decentralized application access key  # noqa: E501

        :return: The dapp_key of this CancelProofRequest.  # noqa: E501
        :rtype: str
        """
        return self._dapp_key

    @dapp_key.setter
    def dapp_key(self, dapp_key):
        """Sets the dapp_key of this CancelProofRequest.

        The decentralized application access key  # noqa: E501

        :param dapp_key: The dapp_key of this CancelProofRequest.  # noqa: E501
        :type: str
        """
        if dapp_key is None:
            raise ValueError("Invalid value for `dapp_key`, must not be `None`")  # noqa: E501
        if dapp_key is not None and len(dapp_key) > 64:
            raise ValueError("Invalid value for `dapp_key`, length must be less than or equal to `64`")  # noqa: E501
        if dapp_key is not None and len(dapp_key) < 1:
            raise ValueError("Invalid value for `dapp_key`, length must be greater than or equal to `1`")  # noqa: E501

        self._dapp_key = dapp_key

    @property
    def protocol(self):
        """Gets the protocol of this CancelProofRequest.  # noqa: E501

        The protocol name. default is 'HEP'.  # noqa: E501

        :return: The protocol of this CancelProofRequest.  # noqa: E501
        :rtype: str
        """
        return self._protocol

    @protocol.setter
    def protocol(self, protocol):
        """Sets the protocol of this CancelProofRequest.

        The protocol name. default is 'HEP'.  # noqa: E501

        :param protocol: The protocol of this CancelProofRequest.  # noqa: E501
        :type: str
        """
        if protocol is None:
            raise ValueError("Invalid value for `protocol`, must not be `None`")  # noqa: E501
        if protocol is not None and len(protocol) > 10:
            raise ValueError("Invalid value for `protocol`, length must be less than or equal to `10`")  # noqa: E501
        if protocol is not None and len(protocol) < 1:
            raise ValueError("Invalid value for `protocol`, length must be greater than or equal to `1`")  # noqa: E501

        self._protocol = protocol

    @property
    def version(self):
        """Gets the version of this CancelProofRequest.  # noqa: E501

        The protocol version such as '1.0'  # noqa: E501

        :return: The version of this CancelProofRequest.  # noqa: E501
        :rtype: str
        """
        return self._version

    @version.setter
    def version(self, version):
        """Sets the version of this CancelProofRequest.

        The protocol version such as '1.0'  # noqa: E501

        :param version: The version of this CancelProofRequest.  # noqa: E501
        :type: str
        """
        if version is None:
            raise ValueError("Invalid value for `version`, must not be `None`")  # noqa: E501
        if version is not None and len(version) > 10:
            raise ValueError("Invalid value for `version`, length must be less than or equal to `10`")  # noqa: E501
        if version is not None and len(version) < 1:
            raise ValueError("Invalid value for `version`, length must be greater than or equal to `1`")  # noqa: E501

        self._version = version

    @property
    def ts(self):
        """Gets the ts of this CancelProofRequest.  # noqa: E501

        The current timestamp  # noqa: E501

        :return: The ts of this CancelProofRequest.  # noqa: E501
        :rtype: int
        """
        return self._ts

    @ts.setter
    def ts(self, ts):
        """Sets the ts of this CancelProofRequest.

        The current timestamp  # noqa: E501

        :param ts: The ts of this CancelProofRequest.  # noqa: E501
        :type: int
        """
        if ts is None:
            raise ValueError("Invalid value for `ts`, must not be `None`")  # noqa: E501

        self._ts = ts

    @property
    def nonce(self):
        """Gets the nonce of this CancelProofRequest.  # noqa: E501

        The random string or auto-increment sequence  # noqa: E501

        :return: The nonce of this CancelProofRequest.  # noqa: E501
        :rtype: str
        """
        return self._nonce

    @nonce.setter
    def nonce(self, nonce):
        """Sets the nonce of this CancelProofRequest.

        The random string or auto-increment sequence  # noqa: E501

        :param nonce: The nonce of this CancelProofRequest.  # noqa: E501
        :type: str
        """
        if nonce is None:
            raise ValueError("Invalid value for `nonce`, must not be `None`")  # noqa: E501
        if nonce is not None and len(nonce) > 64:
            raise ValueError("Invalid value for `nonce`, length must be less than or equal to `64`")  # noqa: E501
        if nonce is not None and len(nonce) < 1:
            raise ValueError("Invalid value for `nonce`, length must be greater than or equal to `1`")  # noqa: E501

        self._nonce = nonce

    @property
    def os(self):
        """Gets the os of this CancelProofRequest.  # noqa: E501

        The operating system of client such as ios, android, dweb,etc.  # noqa: E501

        :return: The os of this CancelProofRequest.  # noqa: E501
        :rtype: str
        """
        return self._os

    @os.setter
    def os(self, os):
        """Sets the os of this CancelProofRequest.

        The operating system of client such as ios, android, dweb,etc.  # noqa: E501

        :param os: The os of this CancelProofRequest.  # noqa: E501
        :type: str
        """
        if os is None:
            raise ValueError("Invalid value for `os`, must not be `None`")  # noqa: E501
        if os is not None and len(os) > 10:
            raise ValueError("Invalid value for `os`, length must be less than or equal to `10`")  # noqa: E501
        if os is not None and len(os) < 1:
            raise ValueError("Invalid value for `os`, length must be greater than or equal to `1`")  # noqa: E501

        self._os = os

    @property
    def language(self):
        """Gets the language of this CancelProofRequest.  # noqa: E501

        The i18n language code such as zh, en, etc.  # noqa: E501

        :return: The language of this CancelProofRequest.  # noqa: E501
        :rtype: str
        """
        return self._language

    @language.setter
    def language(self, language):
        """Sets the language of this CancelProofRequest.

        The i18n language code such as zh, en, etc.  # noqa: E501

        :param language: The language of this CancelProofRequest.  # noqa: E501
        :type: str
        """
        if language is None:
            raise ValueError("Invalid value for `language`, must not be `None`")  # noqa: E501
        if language is not None and len(language) > 10:
            raise ValueError("Invalid value for `language`, length must be less than or equal to `10`")  # noqa: E501
        if language is not None and len(language) < 1:
            raise ValueError("Invalid value for `language`, length must be greater than or equal to `1`")  # noqa: E501

        self._language = language

    @property
    def dapp_signature_method(self):
        """Gets the dapp_signature_method of this CancelProofRequest.  # noqa: E501

        The signature method used by dapp.  # noqa: E501

        :return: The dapp_signature_method of this CancelProofRequest.  # noqa: E501
        :rtype: str
        """
        return self._dapp_signature_method

    @dapp_signature_method.setter
    def dapp_signature_method(self, dapp_signature_method):
        """Sets the dapp_signature_method of this CancelProofRequest.

        The signature method used by dapp.  # noqa: E501

        :param dapp_signature_method: The dapp_signature_method of this CancelProofRequest.  # noqa: E501
        :type: str
        """
        if dapp_signature_method is None:
            raise ValueError("Invalid value for `dapp_signature_method`, must not be `None`")  # noqa: E501
        if dapp_signature_method is not None and len(dapp_signature_method) > 64:
            raise ValueError("Invalid value for `dapp_signature_method`, length must be less than or equal to `64`")  # noqa: E501
        if dapp_signature_method is not None and len(dapp_signature_method) < 1:
            raise ValueError("Invalid value for `dapp_signature_method`, length must be greater than or equal to `1`")  # noqa: E501

        self._dapp_signature_method = dapp_signature_method

    @property
    def dapp_signature(self):
        """Gets the dapp_signature of this CancelProofRequest.  # noqa: E501

        The signature generated by dapp.  # noqa: E501

        :return: The dapp_signature of this CancelProofRequest.  # noqa: E501
        :rtype: str
        """
        return self._dapp_signature

    @dapp_signature.setter
    def dapp_signature(self, dapp_signature):
        """Sets the dapp_signature of this CancelProofRequest.

        The signature generated by dapp.  # noqa: E501

        :param dapp_signature: The dapp_signature of this CancelProofRequest.  # noqa: E501
        :type: str
        """
        if dapp_signature is None:
            raise ValueError("Invalid value for `dapp_signature`, must not be `None`")  # noqa: E501
        if dapp_signature is not None and len(dapp_signature) > 64:
            raise ValueError("Invalid value for `dapp_signature`, length must be less than or equal to `64`")  # noqa: E501
        if dapp_signature is not None and len(dapp_signature) < 1:
            raise ValueError("Invalid value for `dapp_signature`, length must be greater than or equal to `1`")  # noqa: E501

        self._dapp_signature = dapp_signature

    @property
    def sign_type(self):
        """Gets the sign_type of this CancelProofRequest.  # noqa: E501

        The signature Type,aka cryptographic algorithm.  # noqa: E501

        :return: The sign_type of this CancelProofRequest.  # noqa: E501
        :rtype: str
        """
        return self._sign_type

    @sign_type.setter
    def sign_type(self, sign_type):
        """Sets the sign_type of this CancelProofRequest.

        The signature Type,aka cryptographic algorithm.  # noqa: E501

        :param sign_type: The sign_type of this CancelProofRequest.  # noqa: E501
        :type: str
        """
        if sign_type is None:
            raise ValueError("Invalid value for `sign_type`, must not be `None`")  # noqa: E501
        if sign_type is not None and len(sign_type) > 64:
            raise ValueError("Invalid value for `sign_type`, length must be less than or equal to `64`")  # noqa: E501
        if sign_type is not None and len(sign_type) < 1:
            raise ValueError("Invalid value for `sign_type`, length must be greater than or equal to `1`")  # noqa: E501

        self._sign_type = sign_type

    @property
    def signature(self):
        """Gets the signature of this CancelProofRequest.  # noqa: E501

        The signature hex string by application owner. The exclude fields is [sign_type, signature, md5].  # noqa: E501

        :return: The signature of this CancelProofRequest.  # noqa: E501
        :rtype: str
        """
        return self._signature

    @signature.setter
    def signature(self, signature):
        """Sets the signature of this CancelProofRequest.

        The signature hex string by application owner. The exclude fields is [sign_type, signature, md5].  # noqa: E501

        :param signature: The signature of this CancelProofRequest.  # noqa: E501
        :type: str
        """
        if signature is None:
            raise ValueError("Invalid value for `signature`, must not be `None`")  # noqa: E501
        if signature is not None and len(signature) > 130:
            raise ValueError("Invalid value for `signature`, length must be less than or equal to `130`")  # noqa: E501
        if signature is not None and len(signature) < 1:
            raise ValueError("Invalid value for `signature`, length must be greater than or equal to `1`")  # noqa: E501

        self._signature = signature

    @property
    def dapp_id(self):
        """Gets the dapp_id of this CancelProofRequest.  # noqa: E501

        The decentralized application ID  # noqa: E501

        :return: The dapp_id of this CancelProofRequest.  # noqa: E501
        :rtype: str
        """
        return self._dapp_id

    @dapp_id.setter
    def dapp_id(self, dapp_id):
        """Sets the dapp_id of this CancelProofRequest.

        The decentralized application ID  # noqa: E501

        :param dapp_id: The dapp_id of this CancelProofRequest.  # noqa: E501
        :type: str
        """
        if dapp_id is None:
            raise ValueError("Invalid value for `dapp_id`, must not be `None`")  # noqa: E501
        if dapp_id is not None and len(dapp_id) > 64:
            raise ValueError("Invalid value for `dapp_id`, length must be less than or equal to `64`")  # noqa: E501
        if dapp_id is not None and len(dapp_id) < 1:
            raise ValueError("Invalid value for `dapp_id`, length must be greater than or equal to `1`")  # noqa: E501

        self._dapp_id = dapp_id

    @property
    def proof_item_id(self):
        """Gets the proof_item_id of this CancelProofRequest.  # noqa: E501

        The proof item ID  # noqa: E501

        :return: The proof_item_id of this CancelProofRequest.  # noqa: E501
        :rtype: str
        """
        return self._proof_item_id

    @proof_item_id.setter
    def proof_item_id(self, proof_item_id):
        """Sets the proof_item_id of this CancelProofRequest.

        The proof item ID  # noqa: E501

        :param proof_item_id: The proof_item_id of this CancelProofRequest.  # noqa: E501
        :type: str
        """
        if proof_item_id is None:
            raise ValueError("Invalid value for `proof_item_id`, must not be `None`")  # noqa: E501
        if proof_item_id is not None and len(proof_item_id) > 64:
            raise ValueError("Invalid value for `proof_item_id`, length must be less than or equal to `64`")  # noqa: E501
        if proof_item_id is not None and len(proof_item_id) < 1:
            raise ValueError("Invalid value for `proof_item_id`, length must be greater than or equal to `1`")  # noqa: E501

        self._proof_item_id = proof_item_id

    @property
    def proof_subitem_id(self):
        """Gets the proof_subitem_id of this CancelProofRequest.  # noqa: E501

        The proof subitem ID  # noqa: E501

        :return: The proof_subitem_id of this CancelProofRequest.  # noqa: E501
        :rtype: str
        """
        return self._proof_subitem_id

    @proof_subitem_id.setter
    def proof_subitem_id(self, proof_subitem_id):
        """Sets the proof_subitem_id of this CancelProofRequest.

        The proof subitem ID  # noqa: E501

        :param proof_subitem_id: The proof_subitem_id of this CancelProofRequest.  # noqa: E501
        :type: str
        """
        if proof_subitem_id is not None and len(proof_subitem_id) > 64:
            raise ValueError("Invalid value for `proof_subitem_id`, length must be less than or equal to `64`")  # noqa: E501

        self._proof_subitem_id = proof_subitem_id

    def to_dict(self):
        """Returns the model properties as a dict"""
        result = {}

        for attr, _ in six.iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value
        if issubclass(CancelProofRequest, dict):
            for key, value in self.items():
                result[key] = value

        return result

    def to_str(self):
        """Returns the string representation of the model"""
        return pprint.pformat(self.to_dict())

    def __repr__(self):
        """For `print` and `pprint`"""
        return self.to_str()

    def __eq__(self, other):
        """Returns true if both objects are equal"""
        if not isinstance(other, CancelProofRequest):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other
