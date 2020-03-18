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


class Dapp(object):
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
        'dapp_id': 'str',
        'dapp_name': 'str',
        'icon': 'str',
        'dapp_public_key': 'str',
        'package_name': 'str',
        'bundle_id': 'str',
        'schema': 'str',
        'website': 'str',
        'deposit_contract_address': 'str',
        'dapp_type_ids': 'list[int]',
        'dapp_category_id': 'int',
        'auth_login_callback': 'str',
        'pay_order_callback': 'str',
        'proof_submit_callback': 'str'
    }

    attribute_map = {
        'dapp_id': 'dapp_id',
        'dapp_name': 'dapp_name',
        'icon': 'icon',
        'dapp_public_key': 'dapp_public_key',
        'package_name': 'package_name',
        'bundle_id': 'bundle_id',
        'schema': 'schema',
        'website': 'website',
        'deposit_contract_address': 'deposit_contract_address',
        'dapp_type_ids': 'dapp_type_ids',
        'dapp_category_id': 'dapp_category_id',
        'auth_login_callback': 'auth_login_callback',
        'pay_order_callback': 'pay_order_callback',
        'proof_submit_callback': 'proof_submit_callback'
    }

    def __init__(self, dapp_id=None, dapp_name=None, icon=None, dapp_public_key=None, package_name=None, bundle_id=None, schema=None, website=None, deposit_contract_address=None, dapp_type_ids=None, dapp_category_id=None, auth_login_callback=None, pay_order_callback=None, proof_submit_callback=None):  # noqa: E501
        """Dapp - a model defined in Swagger"""  # noqa: E501
        self._dapp_id = None
        self._dapp_name = None
        self._icon = None
        self._dapp_public_key = None
        self._package_name = None
        self._bundle_id = None
        self._schema = None
        self._website = None
        self._deposit_contract_address = None
        self._dapp_type_ids = None
        self._dapp_category_id = None
        self._auth_login_callback = None
        self._pay_order_callback = None
        self._proof_submit_callback = None
        self.discriminator = None
        self.dapp_id = dapp_id
        self.dapp_name = dapp_name
        self.icon = icon
        self.dapp_public_key = dapp_public_key
        self.package_name = package_name
        self.bundle_id = bundle_id
        self.schema = schema
        self.website = website
        self.deposit_contract_address = deposit_contract_address
        self.dapp_type_ids = dapp_type_ids
        self.dapp_category_id = dapp_category_id
        self.auth_login_callback = auth_login_callback
        self.pay_order_callback = pay_order_callback
        self.proof_submit_callback = proof_submit_callback

    @property
    def dapp_id(self):
        """Gets the dapp_id of this Dapp.  # noqa: E501

        The decentralized application ID  # noqa: E501

        :return: The dapp_id of this Dapp.  # noqa: E501
        :rtype: str
        """
        return self._dapp_id

    @dapp_id.setter
    def dapp_id(self, dapp_id):
        """Sets the dapp_id of this Dapp.

        The decentralized application ID  # noqa: E501

        :param dapp_id: The dapp_id of this Dapp.  # noqa: E501
        :type: str
        """
        if dapp_id is None:
            raise ValueError("Invalid value for `dapp_id`, must not be `None`")  # noqa: E501

        self._dapp_id = dapp_id

    @property
    def dapp_name(self):
        """Gets the dapp_name of this Dapp.  # noqa: E501

        The decentralized application name  # noqa: E501

        :return: The dapp_name of this Dapp.  # noqa: E501
        :rtype: str
        """
        return self._dapp_name

    @dapp_name.setter
    def dapp_name(self, dapp_name):
        """Sets the dapp_name of this Dapp.

        The decentralized application name  # noqa: E501

        :param dapp_name: The dapp_name of this Dapp.  # noqa: E501
        :type: str
        """
        if dapp_name is None:
            raise ValueError("Invalid value for `dapp_name`, must not be `None`")  # noqa: E501

        self._dapp_name = dapp_name

    @property
    def icon(self):
        """Gets the icon of this Dapp.  # noqa: E501

        The icon of application  # noqa: E501

        :return: The icon of this Dapp.  # noqa: E501
        :rtype: str
        """
        return self._icon

    @icon.setter
    def icon(self, icon):
        """Sets the icon of this Dapp.

        The icon of application  # noqa: E501

        :param icon: The icon of this Dapp.  # noqa: E501
        :type: str
        """
        if icon is None:
            raise ValueError("Invalid value for `icon`, must not be `None`")  # noqa: E501

        self._icon = icon

    @property
    def dapp_public_key(self):
        """Gets the dapp_public_key of this Dapp.  # noqa: E501

        The public key of DApp  # noqa: E501

        :return: The dapp_public_key of this Dapp.  # noqa: E501
        :rtype: str
        """
        return self._dapp_public_key

    @dapp_public_key.setter
    def dapp_public_key(self, dapp_public_key):
        """Sets the dapp_public_key of this Dapp.

        The public key of DApp  # noqa: E501

        :param dapp_public_key: The dapp_public_key of this Dapp.  # noqa: E501
        :type: str
        """
        if dapp_public_key is None:
            raise ValueError("Invalid value for `dapp_public_key`, must not be `None`")  # noqa: E501

        self._dapp_public_key = dapp_public_key

    @property
    def package_name(self):
        """Gets the package_name of this Dapp.  # noqa: E501

        The package name such as com.demo.dev.android  # noqa: E501

        :return: The package_name of this Dapp.  # noqa: E501
        :rtype: str
        """
        return self._package_name

    @package_name.setter
    def package_name(self, package_name):
        """Sets the package_name of this Dapp.

        The package name such as com.demo.dev.android  # noqa: E501

        :param package_name: The package_name of this Dapp.  # noqa: E501
        :type: str
        """
        if package_name is None:
            raise ValueError("Invalid value for `package_name`, must not be `None`")  # noqa: E501

        self._package_name = package_name

    @property
    def bundle_id(self):
        """Gets the bundle_id of this Dapp.  # noqa: E501

        The bundle id such as com.demo.dev.ios for iOS platform  # noqa: E501

        :return: The bundle_id of this Dapp.  # noqa: E501
        :rtype: str
        """
        return self._bundle_id

    @bundle_id.setter
    def bundle_id(self, bundle_id):
        """Sets the bundle_id of this Dapp.

        The bundle id such as com.demo.dev.ios for iOS platform  # noqa: E501

        :param bundle_id: The bundle_id of this Dapp.  # noqa: E501
        :type: str
        """
        if bundle_id is None:
            raise ValueError("Invalid value for `bundle_id`, must not be `None`")  # noqa: E501

        self._bundle_id = bundle_id

    @property
    def schema(self):
        """Gets the schema of this Dapp.  # noqa: E501

        The routing schema  # noqa: E501

        :return: The schema of this Dapp.  # noqa: E501
        :rtype: str
        """
        return self._schema

    @schema.setter
    def schema(self, schema):
        """Sets the schema of this Dapp.

        The routing schema  # noqa: E501

        :param schema: The schema of this Dapp.  # noqa: E501
        :type: str
        """
        if schema is None:
            raise ValueError("Invalid value for `schema`, must not be `None`")  # noqa: E501

        self._schema = schema

    @property
    def website(self):
        """Gets the website of this Dapp.  # noqa: E501

        The dapp website link  # noqa: E501

        :return: The website of this Dapp.  # noqa: E501
        :rtype: str
        """
        return self._website

    @website.setter
    def website(self, website):
        """Sets the website of this Dapp.

        The dapp website link  # noqa: E501

        :param website: The website of this Dapp.  # noqa: E501
        :type: str
        """
        if website is None:
            raise ValueError("Invalid value for `website`, must not be `None`")  # noqa: E501

        self._website = website

    @property
    def deposit_contract_address(self):
        """Gets the deposit_contract_address of this Dapp.  # noqa: E501

        The deposit contract Address, the example is NEW182....  # noqa: E501

        :return: The deposit_contract_address of this Dapp.  # noqa: E501
        :rtype: str
        """
        return self._deposit_contract_address

    @deposit_contract_address.setter
    def deposit_contract_address(self, deposit_contract_address):
        """Sets the deposit_contract_address of this Dapp.

        The deposit contract Address, the example is NEW182....  # noqa: E501

        :param deposit_contract_address: The deposit_contract_address of this Dapp.  # noqa: E501
        :type: str
        """
        if deposit_contract_address is None:
            raise ValueError("Invalid value for `deposit_contract_address`, must not be `None`")  # noqa: E501

        self._deposit_contract_address = deposit_contract_address

    @property
    def dapp_type_ids(self):
        """Gets the dapp_type_ids of this Dapp.  # noqa: E501

        The support dapp type list.  # noqa: E501

        :return: The dapp_type_ids of this Dapp.  # noqa: E501
        :rtype: list[int]
        """
        return self._dapp_type_ids

    @dapp_type_ids.setter
    def dapp_type_ids(self, dapp_type_ids):
        """Sets the dapp_type_ids of this Dapp.

        The support dapp type list.  # noqa: E501

        :param dapp_type_ids: The dapp_type_ids of this Dapp.  # noqa: E501
        :type: list[int]
        """
        if dapp_type_ids is None:
            raise ValueError("Invalid value for `dapp_type_ids`, must not be `None`")  # noqa: E501

        self._dapp_type_ids = dapp_type_ids

    @property
    def dapp_category_id(self):
        """Gets the dapp_category_id of this Dapp.  # noqa: E501

        The dapp category ID.  # noqa: E501

        :return: The dapp_category_id of this Dapp.  # noqa: E501
        :rtype: int
        """
        return self._dapp_category_id

    @dapp_category_id.setter
    def dapp_category_id(self, dapp_category_id):
        """Sets the dapp_category_id of this Dapp.

        The dapp category ID.  # noqa: E501

        :param dapp_category_id: The dapp_category_id of this Dapp.  # noqa: E501
        :type: int
        """
        if dapp_category_id is None:
            raise ValueError("Invalid value for `dapp_category_id`, must not be `None`")  # noqa: E501

        self._dapp_category_id = dapp_category_id

    @property
    def auth_login_callback(self):
        """Gets the auth_login_callback of this Dapp.  # noqa: E501

        For Mobile Native DApp, it is redirect schema; For website DApp, it is callback url; For  NewDApp, it is HEP-based url.  # noqa: E501

        :return: The auth_login_callback of this Dapp.  # noqa: E501
        :rtype: str
        """
        return self._auth_login_callback

    @auth_login_callback.setter
    def auth_login_callback(self, auth_login_callback):
        """Sets the auth_login_callback of this Dapp.

        For Mobile Native DApp, it is redirect schema; For website DApp, it is callback url; For  NewDApp, it is HEP-based url.  # noqa: E501

        :param auth_login_callback: The auth_login_callback of this Dapp.  # noqa: E501
        :type: str
        """
        if auth_login_callback is None:
            raise ValueError("Invalid value for `auth_login_callback`, must not be `None`")  # noqa: E501

        self._auth_login_callback = auth_login_callback

    @property
    def pay_order_callback(self):
        """Gets the pay_order_callback of this Dapp.  # noqa: E501

        For Mobile Native DApp, it is redirect schema; For website DApp, it is callback url; For  NewDApp, it is HEP-based url.  # noqa: E501

        :return: The pay_order_callback of this Dapp.  # noqa: E501
        :rtype: str
        """
        return self._pay_order_callback

    @pay_order_callback.setter
    def pay_order_callback(self, pay_order_callback):
        """Sets the pay_order_callback of this Dapp.

        For Mobile Native DApp, it is redirect schema; For website DApp, it is callback url; For  NewDApp, it is HEP-based url.  # noqa: E501

        :param pay_order_callback: The pay_order_callback of this Dapp.  # noqa: E501
        :type: str
        """
        if pay_order_callback is None:
            raise ValueError("Invalid value for `pay_order_callback`, must not be `None`")  # noqa: E501

        self._pay_order_callback = pay_order_callback

    @property
    def proof_submit_callback(self):
        """Gets the proof_submit_callback of this Dapp.  # noqa: E501

        For Mobile Native DApp, it is redirect schema; For website DApp, it is callback url; For  NewDApp, it is HEP-based url.  # noqa: E501

        :return: The proof_submit_callback of this Dapp.  # noqa: E501
        :rtype: str
        """
        return self._proof_submit_callback

    @proof_submit_callback.setter
    def proof_submit_callback(self, proof_submit_callback):
        """Sets the proof_submit_callback of this Dapp.

        For Mobile Native DApp, it is redirect schema; For website DApp, it is callback url; For  NewDApp, it is HEP-based url.  # noqa: E501

        :param proof_submit_callback: The proof_submit_callback of this Dapp.  # noqa: E501
        :type: str
        """
        if proof_submit_callback is None:
            raise ValueError("Invalid value for `proof_submit_callback`, must not be `None`")  # noqa: E501

        self._proof_submit_callback = proof_submit_callback

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
        if issubclass(Dapp, dict):
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
        if not isinstance(other, Dapp):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other
