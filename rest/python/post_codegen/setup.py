# coding: utf-8

"""
    HEP REST API

    The REST API for HEP protocol  # noqa: E501

    OpenAPI spec version: v1
    Contact: xiawu@zeuux.org
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""

from setuptools import setup, find_packages  # noqa: H301

NAME = "hep-rest"
VERSION = "1.0.0"
# To install the library, run the following
#
# python setup.py install
#
# prerequisite: setuptools
# http://pypi.python.org/pypi/setuptools

REQUIRES = ["urllib3 >= 1.15", "six >= 1.10", "certifi", "python-dateutil", "fastecdsa == 1.7.3", "pysha3 == 1.0.2"]

setup(
    name=NAME,
    version=VERSION,
    description="HEP REST API",
    author_email="xiawu@zeuux.org",
    url="",
    keywords=["Swagger", "HEP REST API"],
    install_requires=REQUIRES,
    packages=find_packages(),
    include_package_data=True,
    long_description="""\
    The REST API for HEP protocol  # noqa: E501
    """
)
