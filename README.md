Here all base class dependencies are aggregated into a single class, namely `ControllerAggregateService`.

> See: https://autofac.readthedocs.io/en/latest/advanced/aggregate-services.html


## Alternative

The same idea could be implemented by providing the `Symfony\Component\DependencyInjection\ContainerBuilder` to the
`BaseController`.
