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

from hep_rest_api.models.thing import Thing  # noqa: F401,E501


class OrderItem(object):
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
        'order_item_number': 'str',
        'ordered_item': 'Thing',
        'order_item_quantity': 'int',
        'price_currency': 'str',
        'price': 'str'
    }

    attribute_map = {
        'order_item_number': 'order_item_number',
        'ordered_item': 'ordered_item',
        'order_item_quantity': 'order_item_quantity',
        'price_currency': 'price_currency',
        'price': 'price'
    }

    def __init__(self, order_item_number=None, ordered_item=None, order_item_quantity=None, price_currency=None, price=None):  # noqa: E501
        """OrderItem - a model defined in Swagger"""  # noqa: E501

        self._order_item_number = None
        self._ordered_item = None
        self._order_item_quantity = None
        self._price_currency = None
        self._price = None
        self.discriminator = None

        self.order_item_number = order_item_number
        self.ordered_item = ordered_item
        self.order_item_quantity = order_item_quantity
        self.price_currency = price_currency
        self.price = price

    @property
    def order_item_number(self):
        """Gets the order_item_number of this OrderItem.  # noqa: E501

        The number of order item  # noqa: E501

        :return: The order_item_number of this OrderItem.  # noqa: E501
        :rtype: str
        """
        return self._order_item_number

    @order_item_number.setter
    def order_item_number(self, order_item_number):
        """Sets the order_item_number of this OrderItem.

        The number of order item  # noqa: E501

        :param order_item_number: The order_item_number of this OrderItem.  # noqa: E501
        :type: str
        """
        if order_item_number is None:
            raise ValueError("Invalid value for `order_item_number`, must not be `None`")  # noqa: E501
        if order_item_number is not None and len(order_item_number) > 64:
            raise ValueError("Invalid value for `order_item_number`, length must be less than or equal to `64`")  # noqa: E501
        if order_item_number is not None and len(order_item_number) < 1:
            raise ValueError("Invalid value for `order_item_number`, length must be greater than or equal to `1`")  # noqa: E501

        self._order_item_number = order_item_number

    @property
    def ordered_item(self):
        """Gets the ordered_item of this OrderItem.  # noqa: E501


        :return: The ordered_item of this OrderItem.  # noqa: E501
        :rtype: Thing
        """
        return self._ordered_item

    @ordered_item.setter
    def ordered_item(self, ordered_item):
        """Sets the ordered_item of this OrderItem.


        :param ordered_item: The ordered_item of this OrderItem.  # noqa: E501
        :type: Thing
        """
        if ordered_item is None:
            raise ValueError("Invalid value for `ordered_item`, must not be `None`")  # noqa: E501

        self._ordered_item = ordered_item

    @property
    def order_item_quantity(self):
        """Gets the order_item_quantity of this OrderItem.  # noqa: E501

        The quantity of order item  # noqa: E501

        :return: The order_item_quantity of this OrderItem.  # noqa: E501
        :rtype: int
        """
        return self._order_item_quantity

    @order_item_quantity.setter
    def order_item_quantity(self, order_item_quantity):
        """Sets the order_item_quantity of this OrderItem.

        The quantity of order item  # noqa: E501

        :param order_item_quantity: The order_item_quantity of this OrderItem.  # noqa: E501
        :type: int
        """
        if order_item_quantity is None:
            raise ValueError("Invalid value for `order_item_quantity`, must not be `None`")  # noqa: E501

        self._order_item_quantity = order_item_quantity

    @property
    def price_currency(self):
        """Gets the price_currency of this OrderItem.  # noqa: E501

        The symbol of fiat or digital token, such as USD, RMB, NEW,BTC,ETH.  # noqa: E501

        :return: The price_currency of this OrderItem.  # noqa: E501
        :rtype: str
        """
        return self._price_currency

    @price_currency.setter
    def price_currency(self, price_currency):
        """Sets the price_currency of this OrderItem.

        The symbol of fiat or digital token, such as USD, RMB, NEW,BTC,ETH.  # noqa: E501

        :param price_currency: The price_currency of this OrderItem.  # noqa: E501
        :type: str
        """
        if price_currency is None:
            raise ValueError("Invalid value for `price_currency`, must not be `None`")  # noqa: E501
        if price_currency is not None and len(price_currency) > 64:
            raise ValueError("Invalid value for `price_currency`, length must be less than or equal to `64`")  # noqa: E501
        if price_currency is not None and len(price_currency) < 1:
            raise ValueError("Invalid value for `price_currency`, length must be greater than or equal to `1`")  # noqa: E501

        self._price_currency = price_currency

    @property
    def price(self):
        """Gets the price of this OrderItem.  # noqa: E501

        The amount of fiat or digital token, unit is the minimum unit of given fiat or digital token.  # noqa: E501

        :return: The price of this OrderItem.  # noqa: E501
        :rtype: str
        """
        return self._price

    @price.setter
    def price(self, price):
        """Sets the price of this OrderItem.

        The amount of fiat or digital token, unit is the minimum unit of given fiat or digital token.  # noqa: E501

        :param price: The price of this OrderItem.  # noqa: E501
        :type: str
        """
        if price is None:
            raise ValueError("Invalid value for `price`, must not be `None`")  # noqa: E501
        if price is not None and len(price) > 64:
            raise ValueError("Invalid value for `price`, length must be less than or equal to `64`")  # noqa: E501
        if price is not None and len(price) < 1:
            raise ValueError("Invalid value for `price`, length must be greater than or equal to `1`")  # noqa: E501

        self._price = price

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
        if issubclass(OrderItem, dict):
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
        if not isinstance(other, OrderItem):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other
